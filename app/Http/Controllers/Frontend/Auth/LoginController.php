<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\User;
use App\Payment;
use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Storage;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //ghi đè lên hàm show login của auth
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function redirectToProviderFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallbackFacebook(Request $request){
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
        $existingUser = User::where('email', $user->email)->first();
        //dd($existingUser);die();
        if($existingUser){
             //xử lí thông báo
             $listPay = $this->checkPayment($existingUser->id);
             $totalMessages = $globalMessages = $courseMessages = 0;
             $globalMessages = Message::where(['status' => 1, 'global' => 1, 'recent' => 1])->get()->count();
             if(isset($listPay['courses'])) {
                 $courseMessages = Message::where(['status' => 1, 'global' => 0, 'recent' => 1])->whereIn('buy_course_id', $listPay['courses'])->get()->count();
             }
             $totalMessages = $globalMessages + $courseMessages;
             $request->session()->put('totalMessages', $totalMessages);
             $request->session()->put('listPay', $listPay);
             //end thong bao
            Auth::login($existingUser);
            $sessionId = $request->session()->getId();
            Storage::put('login/'.$existingUser->id.'.txt', $sessionId);
        } else {
            // create a new user
             //xử lí thông báo
             $request->session()->forget('totalMessages');
             $request->session()->forget('listPay');
             //end thong bao
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->facebook_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            Auth::login($newUser, true);
        }
        return redirect()->to('/');
        // $user->token;
    }
    public function redirectToProviderGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackGoogle(Request $request){
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }

        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        //dd($existingUser);die();
        if($existingUser){
            // log them in
            //xử lí thông báo
            $listPay = $this->checkPayment($existingUser->id);
            $totalMessages = $globalMessages = $courseMessages = 0;
            $globalMessages = Message::where(['status' => 1, 'global' => 1, 'recent' => 1])->get()->count();
            if(isset($listPay['courses'])) {
                $courseMessages = Message::where(['status' => 1, 'global' => 0, 'recent' => 1])->whereIn('buy_course_id', $listPay['courses'])->get()->count();
            }
            $totalMessages = $globalMessages + $courseMessages;
            $request->session()->put('totalMessages', $totalMessages);
            $request->session()->put('listPay', $listPay);
            //end thong bao
            Auth::login($existingUser);
            $sessionId = $request->session()->getId();
            Storage::put('login/'.$existingUser->id.'.txt', $sessionId);
        } else {
            //xử lí thông báo
            $request->session()->forget('totalMessages');
            $request->session()->forget('listPay');
            //end thong bao

            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();

            Auth::login($newUser, true);
        }
        return redirect()->to('/');
    }
    public function authenticated(Request $request, $user){
        $userId = $user->id;
        $sessionId = $request->session()->getId();
        Storage::put('login/'.$userId.'.txt', $sessionId);

        //xử lí thông báo
        $listPay = $this->checkPayment($userId);
        $totalMessages = $globalMessages = $courseMessages = 0;
        $globalMessages = Message::where(['status' => 1, 'global' => 1, 'recent' => 1])->get()->count();
        if(isset($listPay['courses'])) {
            $courseMessages = Message::where(['status' => 1, 'global' => 0, 'recent' => 1])->whereIn('buy_course_id', $listPay['courses'])->get()->count();
        }
        $totalMessages = $globalMessages + $courseMessages;
        $request->session()->put('totalMessages', $totalMessages);
        $request->session()->put('listPay', $listPay);
        //end thong bao
        $url = $request->input('url');
        return redirect($url);
    }
    public function checkPayment($userId){
        $dateNow = date('Y-m-d');
        $checkPayment = Payment::where(['user_id' => $userId, 'status' => 1])->where('end_date', '>=', $dateNow)->get()->count();
        if($checkPayment > 0){
           $payments = Payment::where(['user_id' => $userId, 'status' => 1])->where('end_date', '>=', $dateNow)->get()->toArray();
           $data = array();
           foreach($payments as $pay){
                if($pay['course_id'] != ''){
                    $data['courses'][] = $pay['course_id'];
                }else{
                    $data['packages'][] = $pay['package_id'];
                }
            }
            return $data;
        }else{
            return false;
        }
    }
}
