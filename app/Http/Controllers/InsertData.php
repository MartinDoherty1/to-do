<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InsertData extends Controller
{
    public function insertDataForm()
    {
        return view('insert');
    }

    public function insertIntoDB(Request $request)
    {
        $Title = $request->input('Title');
        $Body = $request->input('Body');
        $Date = $request->input('Date');

        $data = array('Title'=>$Title, 'Body'=>$Body, 'Date'=>$Date);

        DB::table('posts')->insert($data);

        return redirect()->action([ViewAllTasks::class, 'AllTasks']);



    }
}
