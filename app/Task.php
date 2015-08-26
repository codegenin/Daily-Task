<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    protected $fillable = [
      'title', 'description', 'scheduled_at'
    ];

    protected $dates = ['scheduled_at']; // Change into laravel dates

    /**
     * Setter attribute for scheduled_at field
     *
     * @param $date
     */
    public function setScheduledAtAttribute($date)
    {
        $this->attributes['scheduled_at'] = Carbon::parse($date);
    }

    /**
     * Display current date format on create task form
     *
     * @param $date
     * @return string
     */
    public function getScheduledAtAttribute($date)
    {
        return Carbon::parse($date)->format('M-d-Y');
    }

    /**
     * Task belongs to a user relationship
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
