<?php

namespace App\Http\Controllers;

use App\Models\Communities;
use Illuminate\Http\Request;
use App\Models\Account;

class CommunitiesController extends Controller
{
    public function index(){
        return view('community',[
            'title'=> 'Community',
            'communities' => Communities::all()
        ]);
    }

    public function communityDetail(Communities $communities){
        $account = Account::all();
        $account_get = $account->where('communities_id' , $communities->id);
        return view('detail-community' , [
            'title'=> 'Detail Community',
            'community' => $communities,
            'account' => $account_get
        ]);
    }


}
