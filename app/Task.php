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
     * Set name field to slug on insert
     *
     * @param $name
     */
    public function setTitleAttribute($name)
    {
        $this->attributes['title'] = $name;
        if (!$this->exists) {
            $this->setUniqueSlug($name, '');
        }
    }
    /**
     * Recursive routine to set unique slug
     *
     * @param $name
     * @param $extra
     */
    protected function setUniqueSlug($name, $extra)
    {
        $slug = str_slug($name.'-'.$extra);
        if (static::whereSlug($slug)->exists()) {
            $this->setUniqueSlug($name, $extra + 1);
            return;
        }
        $this->attributes['slug'] = $slug;
    }

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
