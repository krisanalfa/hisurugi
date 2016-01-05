<?php

namespace HitenMitsurugi\Ryukansen\Repositories;

use Illuminate\Database\ConnectionResolverInterface;

class Menu
{
    protected $db;

    public function __construct(ConnectionResolverInterface $db)
    {
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->table('menus')->get();
    }
}
