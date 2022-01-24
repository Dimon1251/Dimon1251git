<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMod extends Model
{
    protected $fillable = ["file_path", "nickname", "real_name","origin_description","superpowers","catch_phrase"];
    public $timestamps = false;
    use HasFactory;
}
