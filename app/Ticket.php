<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name', 'email', 'software_issue', 'operating_system', 'comment', 'status'
    ];
} 
