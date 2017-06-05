<?php
/**
 *
 * HASHAN KULASINGHE
 * HASHK99@GMAIL.COM
 * 05 JUNE 2017
 *
 */


namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $table = 'user_roles';

    protected $fillable = [
        'id',
        'role' 
    ];

    protected $primaryKey = 'id';
 

    /**
     * Get role by constant
     * @param $const
     * @return mixed
     */
    public static function getByRoleConst($const){
        return Role::where('role', $const)->first();
    }
}
