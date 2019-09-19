<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Message;

class MessageController extends Controller
{
    public function index(){
        $data['title'] = 'Thông báo';
        $data['description'] = 'Thông báo';
        $data['messages'] = Message::where(['status' => 1, 'global' => 1])->orderBy('id', 'desc')->get();
        $data['courseMessages'] = array();
        if(session('listPay')){
            $listPay = session('listPay');
            if(isset($listPay['courses'])){
                $data['courseMessages'] = Message::where(['status' => 1, 'global' => 0])->whereIn('buy_course_id', $listPay['courses'])->orderBy('id', 'desc')->get();
            }
        }
        return view('frontend.messages.index', $data);
    }
    function detail($id){
        $message = Message::where('id', $id)->first()->toArray();
        $data['title'] = $message['title'];
        $data['description'] = $message['excerpt'];
        $data['message'] = $message;
        return view('frontend.messages.detail', $data);
    }
}
