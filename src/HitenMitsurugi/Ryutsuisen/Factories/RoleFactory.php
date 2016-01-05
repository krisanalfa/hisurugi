<?php

namespace HitenMitsurugi\Ryutsuisen\Factories;

use Illuminate\Contracts\Foundation\Application;
use HitenMitsurugi\Ryutsuisen\Contracts\Role as RoleContract;

class RoleFactory
{
    protected $app;

    protected $role;

    public function __construct(Application $app, RoleContract $role)
    {
        $this->app = $app;
        $this->role = $role;
    }

    public function make()
    {
        dd($this->role);
    }
}
