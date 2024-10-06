<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getUser()
    {
        return $this->belongsTo(User::class);
    }

    public function getDriver()
    {
        return $this->belongsTo(Driver::class);
    }
}
