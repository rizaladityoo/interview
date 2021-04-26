<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index() {
        $customers = DB::table('customer') -> get();
        return view('test', ['customers'=>$customers]);
     }
     public function api() {
        return DB::table('customer') -> get();
     }
}
