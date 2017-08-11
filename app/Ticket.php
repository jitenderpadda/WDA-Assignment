<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'service_area', 'subject', 'description', 'status', 'user_email'
    ];
}
