<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ViewAllTasks;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\DB;

class updateTask extends Controller
{
    public function showTaskToChange($id)
    {
        $task = DB::select('select * from posts where ID = ?', [$id]);
        return view('updateTask',['task'=>$task]);
    }
    
    public function updateTask(Request $request, $id)
    {
        $title = $request->input('Title');
        $body = $request->input('Body');
        $finished = $request->input('Completed');
        DB::update('update posts set Title = ?, Body = ?, Finished = ? where id = ?',[$title,$body,$finished,$id]);

        $tasks = DB::select('select * from posts');

        return redirect()->action([ViewAllTasks::class, 'AllTasks']);

    }
}
