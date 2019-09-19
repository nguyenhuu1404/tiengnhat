<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Payment;
use App\User;

class ReportController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function index(Request $repuest){
        $reports = array();
        if($repuest->get('from') != '' & $repuest->get('to') != ''){
            $from = $repuest->get('from');
            $to = $repuest->get('to');
            $reports = Payment::where('created_at', '>=', date('Y-m-d', strtotime($from)))->where('created_at', '<=', date('Y-m-d', strtotime($to)))->where('status', 1)->get();
            $total = 0;
            $userIds = [];
            foreach($reports as $report){
                $total += $report->price;
                $userIds[] = $report->user_id;
            }
            $dataUsers = [];
            $users = User::whereIn('id', $userIds)->get();
            foreach($users as $user){
                $dataUsers[$user->id] = $user->name;
            }
            $data['dataUsers'] = $dataUsers;
            $data['total'] = $total;
        }
        $data['reports'] = $reports;
        return view('frontend.reports.index', $data);
    }
}
