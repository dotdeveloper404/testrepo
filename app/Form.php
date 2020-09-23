<?php

namespace App;

use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Form extends Model
{

    protected $table = 'forms';
    protected $guarded = [];

    public function form_data()
    {
        return $this->hasOne('App\FormData');
    }

    public function form_meta()
    {
        return $this->hasMany('App\FormMeta');
    }

}
