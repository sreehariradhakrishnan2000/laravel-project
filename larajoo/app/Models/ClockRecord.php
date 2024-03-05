<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClockRecord extends Model
{
    protected $fillable = ['clock_in', 'clock_out'];
    public $timestamps = false;

public function user()
{
    return $this->belongsTo(User::class);
}

    }
