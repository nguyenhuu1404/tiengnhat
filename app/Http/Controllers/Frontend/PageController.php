<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;
use App\Banner;
use App\Register;
use Validator;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::where(['slug' => $slug, 'status' => 1])->first();
        if($page){
            $data['page'] = $page;
            $data['title'] = $page->title;
            $data['description'] = $page->meta_description;

            return view('frontend.pages.index', $data);
        }else{
            return redirect('/');
        }

    }

    public function camnhan(){
        $data['title'] = 'Cảm nhận của học viên';
        $data['description'] = 'Cảm nhận của học viên';

        return view('frontend.pages.camnhan', $data);
    }
    
    public function landing()
    {
        $data['title'] = 'Khóa học tiếng Nhật online N5 full - tiếng Nhật cô Lam';
        $data['description'] = 'Khóa học tiếng Nhật online N5 full - tiếng Nhật cô Lam';
        $data['banners'] = Banner::orderBy('order', 'desc')->where('status', 1)->get();
        $data['page'] = 'n5';

        return view('frontend.pages.landing', $data);
    }

    public function landing4()
    {
        $data['title'] = 'Khóa học tiếng Nhật online combo N4 N5 ưu đãi chỉ 1 triệu đồng - tiếng Nhật cô Lam';
        $data['description'] = 'Khóa học tiếng Nhật online combo N4 N5 ưu đãi chỉ 1 triệu đồng';
        $data['banners'] = Banner::orderBy('order', 'desc')->where('status', 1)->get();
        $data['page'] = 'n4n5';

        return view('frontend.pages.n4', $data);
    }

    public function saveLanding(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ],[
            'required' => ':attribute không được bỏ trống.',
            'email' => ':attribute không hợp lệ.',
        ]);
        $page = $request->input('page');
        if($validator->fails()) {
            return redirect(route('frontend.'. $page .'.landing'))
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $register = [
                'fullname' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'page' => $page
            ];
            Register::create($register);
            return redirect(route('frontend.'. $page .'.landing'));
        }
    }
}
