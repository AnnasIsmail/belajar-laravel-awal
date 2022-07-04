<?php

namespace App\Http\Controllers;

use App\Models\Communities;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
{
    public function index(){
        return view('community',[
            'title'=> 'Community',
            'communities' => Communities::all()
        ]);
    }

    public function communityDetail(Communities $communities){

        return view('detail-community' , [
            'title'=> 'Detail Community',
            'community' => $communities,
            'account' => $communities->account,
            'member' => $communities->detail_communities->load('Users'),
        ]);
    }


}
