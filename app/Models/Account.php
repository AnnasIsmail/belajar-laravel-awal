<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function Communities(){
        return $this->belongsTo(Communities::class);
    }

    protected $fillable = [
        "RiotId","Tagline","Rank","Username","Password"
    ];

    protected $guarded = ["id"];
}
