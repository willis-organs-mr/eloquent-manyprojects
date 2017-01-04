<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function projects()
    {
        // params are: Related model (Project), Table [view] (user_company_project_view), and the foreign key (user_id)
        return $this->belongsToMany(Project::class, 'user_company_project_view', 'user_id');
    }
}
