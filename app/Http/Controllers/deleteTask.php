<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteTask extends Controller
{
    public function deleteTask($id) 
    {
        DB::delete('delete from posts where ID = ?', [$id]);
        return redirect()->action([ViewAllTasks::class, 'AllTasks']);
    }
}
