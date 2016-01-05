<?php

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class UserRoleAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $admin = User::where(['email' => 'admin@foobarinc.com'])->first();
        $adminRole = Role::where(['name' => 'admin'])->first();
        $adminPermission = Permission::where(['name' => 'sudo'])->first();

        $admin->attachRole($adminRole);
        $adminRole->attachPermission($adminPermission);

        // PM
        $projectManager = User::where(['email' => 'pm@foobarinc.com'])->first();
        $projectManagerRole = Role::where(['name' => 'project-manager'])->first();
        $projectManagerPermission = Permission::where(['name' => 'listing-budget'])->first();

        $projectManager->attachRole($projectManagerRole);
        $projectManagerRole->attachPermission($projectManagerPermission);

        // Team Leader
        $teamLeader = User::where(['email' => 'tl@foobarinc.com'])->first();
        $teamLeaderRole = Role::where(['name' => 'team-leader'])->first();
        $teamLeaderPermission = Permission::where(['name' => 'make-timeline'])->first();

        $teamLeader->attachRole($teamLeaderRole);
        $teamLeaderRole->attachPermission($teamLeaderPermission);

        // Programmer
        $programmer = User::where(['email' => 'pg@foobarinc.com'])->first();
        $programmerRole = Role::where(['name' => 'programmer'])->first();
        $programmerPermission = Permission::where(['name' => 'knowing-tasks'])->first();

        $programmer->attachRole($programmerRole);
        $programmerRole->attachPermission($programmerPermission);
    }
}
