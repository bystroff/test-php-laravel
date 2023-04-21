<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotebookUser extends Model
{
    protected $table = 'notebook_users';
    protected $dates = [
        'updated_at',
        'created_at',
    ];
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'company',
        'phone',
        'email',
        'birthday',
        'photo'
    ];
}
