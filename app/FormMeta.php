<?php

namespace App;

use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FormMeta extends Model
{

    protected $table = 'form_meta';
    protected $guarded = [];

    public function form()
    {
        return $this->belongsTo("App\Form");
    }


}
