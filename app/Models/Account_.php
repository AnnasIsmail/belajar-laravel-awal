<?php

namespace App\Models;

class Account 
{
    private static $acc = [
        [
            "RiotId"=> "Forgotten",
            "Tagline"=> "MLG",
            "Rank"=> "Silver 1",
            "Username"=> "kolangxkaling",
            "Password"=> "asuna321",
        ],
 
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "Pasar",
            "Rank"=> "Unranked",
            "Username"=> "annas2111",
            "Password"=> "Annas211112345",
        ],
        [
            "RiotId"=> "JOKOWIJAGOAN",
            "Tagline"=> "WIBU",
            "Rank"=> "Unranked",
            "Username"=> "annas2110",
            "Password"=> "Annas211012345",
        ]
    ];

    public static function all(){
        return collect(self::$acc);
    }

    public static function find($slug){
        $account = static::all();
        // $account_return = [];

        // foreach($account as $data){
        //     if($data["Username"] == $slug){
        //         $account_return = $data;
        //     }
        // }
        return $account->firstWhere('Username', $slug) ;
    }
}
