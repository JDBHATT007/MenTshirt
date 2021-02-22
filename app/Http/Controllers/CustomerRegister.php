<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_register;

class CustomerRegister extends Controller
{
    //
    public function register()
    {
        //$a=tbl_register::select('select * from tbl_register');
        //dd($a);
        return tbl_register::all();
    }
}
