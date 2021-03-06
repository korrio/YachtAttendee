<?php

namespace AttendCheck;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the user's type
     * 
     * @return \AttendCheck\UserType
     */
    public function type()
    {
        return $this->belongsTo('AttendCheck\UserType');
    }

    /**
     * Get the user's faculty
     * 
     * @return \AttendCheck\Faculty
     */
    public function faculty()
    {
        return $this->belongsTo('AttendCheck\Faculty');
    }

    public function approve()
    {
        if (! $this->active) {
            $this->active = true;
            $this->save();
        }
    }
}
