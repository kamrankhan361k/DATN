<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'events';
    protected $fillable =[
        'event_id',
        'event_name',
        'date_start',
        'date_end',
        'type_event',
        'discount',
        'slug',
        'status'
    ];
}
