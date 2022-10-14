<?php

namespace App\Http\Controllers;

use App\Models\BankUser;
use Illuminate\Http\Request;

class BankUsersController extends Controller
{
    public function index(){
        $data  = BankUser::with('bank', 'deposite')->get();
        return view('bankdetails', ['data'=>$data]);
    }
}
