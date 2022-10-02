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

        $data = array('Title'=>$Title, 'Body'=>$Body);

        DB::table('posts')->insert($data);

        $tasks = DB::select('select * from posts');
        return view('ViewAllTasks',['tasks'=>$tasks]);



    }
}
