<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'nid',
        'phone',
        'status',
        'scheduled_date',
        'center_id'
    ];
}
