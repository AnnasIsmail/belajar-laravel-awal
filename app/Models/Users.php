<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function detail_communities(){
        return $this->hasMany(detail_communities::class);
    }

    protected $guarded = ["id"];

}
