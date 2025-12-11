<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// If using spatie/permission, uncomment the HasRoles trait
// use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable{
    use Notifiable; //, HasRoles;
protected $fillable = [
    'name',
    'email',
    'password',
    'role',
];

    protected $hidden = ['password','remember_token'];
}
