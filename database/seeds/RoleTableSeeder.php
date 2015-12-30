<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectManager = new Role();
        $projectManager->name         = 'project-manager';
        $projectManager->display_name = 'Project Manager'; // optional
        $projectManager->description  = 'User is the manager of a given project'; // optional
        $projectManager->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $teamLeader = new Role();
        $teamLeader->name         = 'team-leader';
        $teamLeader->display_name = 'Team Leader'; // optional
        $teamLeader->description  = 'User is the team leader of a given project'; // optional
        $teamLeader->save();

        $programmer = new Role();
        $programmer->name         = 'programmer';
        $programmer->display_name = 'Programmer'; // optional
        $programmer->description  = 'User is the team programmer of a given project'; // optional
        $programmer->save();
    }
}
