<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewAllTasks extends Controller
{
    public function AllTasks()
    {
        $tasks = DB::select('select * from posts');
        return view('ViewAllTasks',['tasks'=>$tasks]);
        
    }
    
}
