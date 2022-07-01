<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index(){
        return view('my-community' , [
            'title'=> 'My Community',
            'account' => Account::all()
        ]);
    }

    public function show(Account $account){
        return view('update-account' , [
            'title'=> 'Update Account',
            'data'=> $account
        ]);
    }
}
