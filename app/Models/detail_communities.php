<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_communities extends Model
{
    use HasFactory;

    protected $guarded = ["id"];


    public function Users(){
        return $this->belongsTo(Users::class);
    }

    public function Communities(){
        return $this->belongsTo(Communities::class);
    }
}
