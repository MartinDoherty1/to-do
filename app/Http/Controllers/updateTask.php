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
        DB::update('update posts set Title = ?, Body = ? where id = ?',[$title,$body,$id]);

        $tasks = DB::select('select * from posts');
        return view('ViewAllTasks',['tasks'=>$tasks]);

    }
}
