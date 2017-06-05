<?php

/**
 *
 * HASHAN KULASINGHE
 * HASHK99@GMAIL.COM
 * 05 JUNE 2017
 *
 */

namespace App;

use Hash;
use DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\UserRole;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable;

    protected $dates = ['deleted_at'];
    
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

    //CONSTANTS
    const SUPER_ADMIN_USER_CONST = 'SUPER_ADMIN';
    const REVIEW_ADMIN_LEADER_USER_CONST = 'REVIEW_ADMIN_LEADER';
    const REVIEW_ADMIN_USER_CONST = 'REVIEW_ADMIN'; 
    const DOCTOR_USER_CONST = 'DOCTOR';
    const RESEARCHER_USER_CONST = 'RESEARCHER';
       
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }

    public function match_password (User $user , $password){  
        return Hash::check( $password,$user->password);
    }

    public function user_role(){
        return $this->hasOne('App\UserRole','id', 'user_role_id'); 
    }

    public function isAdmin()
    {
        return ( $this->user_role->role ==  User::SUPER_ADMIN_USER_CONST );
    }
   
    public function isCommonReviewAdmin()
    {
        return $this->user_role()->whereIn('role', array(User::REVIEW_ADMIN_LEADER_USER_CONST, User::REVIEW_ADMIN_USER_CONST, User::DOCTOR_USER_CONST ) )->first();
    }

    public function isResearcher()
    {
        return ( $this->user_role->role ==  User::RESEARCHER_USER_CONST );
    }

}
