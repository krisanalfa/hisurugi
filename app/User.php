<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get role name list
     *
     * @return array
     */
    public function rolesName()
    {
        $rolesName = [];

        foreach ($this->cachedRoles() as $role) {
            $rolesName[] = $role->name;
        }

        return array_unique($rolesName);
    }

    /**
     * Get permission name list
     *
     * @return array
     */
    public function permsName()
    {
        $permsName = [];

        foreach ($this->cachedRoles() as $role) {
            foreach ($role->cachedPermissions() as $permission) {
                $permsName[] = $permission->name;
            }
        }

        return array_unique($permsName);
    }
}
