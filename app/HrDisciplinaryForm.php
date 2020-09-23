<?php

namespace App;

use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HrDisciplinaryForm extends Model
{

    protected $table = 'hr_disciplinary_form';
    protected $guarded = [];


    public function supervisor()
    {
        return $this->belongsTo(User::class,'supervisor_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class,'employee_id');
    }




}
