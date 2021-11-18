<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DemoController extends Controller
{
    public function changeStatus()
    {
        $status = DB::table('sms')
            ->where('id', 1)
            ->value('status');

        if($status == 1)
        {
            DB::table('sms')->where('id',1)->update(['status' => 0]);
        }
        else
        {
            DB::table('sms')->where('id',1)->update(['status' => 1]);
        }

        return redirect()->back();
    }
}
