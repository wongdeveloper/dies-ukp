<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countdown extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "countdown";
    protected $fillable = ["date_countdown"];

}
