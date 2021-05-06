<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "animations";
    protected $fillable = ['id','scenes_id','path', 'scale', 'background_color', 'description','author_id'];

}
