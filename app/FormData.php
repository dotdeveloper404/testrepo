<?php

namespace App;

use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FormData extends Model
{

    protected $table = 'form_data';
    protected $guarded = [];

    public function form()
    {
        return $this->belongsTo("App\Form");
    }


}
