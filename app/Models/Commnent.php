<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commnent extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected function creator() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
