<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    use HasFactory;

    public function Account(){
        return $this->hasMany(Account::class);
    }

    public function detail_communities(){
        return $this->hasMany(detail_communities::class);
    }

    protected $guarded = ["id"];

}
