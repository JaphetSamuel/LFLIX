<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fields = [
        "titre",
        "description",
        "realisateur",
        "votes",
        "image_url",
        "video",
    ];

    protected $casts = [
        "votes" => "integer",
    ];

    public function auteur(){
        return $this->belongsTo(User::class, "user_id");
    }
}
