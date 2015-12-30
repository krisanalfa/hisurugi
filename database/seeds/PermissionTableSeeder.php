<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sudo = new Permission();
        $sudo->name         = 'sudo';
        $sudo->display_name = 'I can do everything'; // optional
        $sudo->description  = 'I can do everything'; // optional
        $sudo->save();

        $knowingBudget = new Permission();
        $knowingBudget->name         = 'knowing-budget';
        $knowingBudget->display_name = 'Knowing Budget'; // optional
        $knowingBudget->description  = 'Knowing Budget'; // optional
        $knowingBudget->save();

        $makeTimeline = new Permission();
        $makeTimeline->name         = 'make-timeline';
        $makeTimeline->display_name = 'Make Timeline'; // optional
        $makeTimeline->description  = 'Make Timeline'; // optional
        $makeTimeline->save();

        $knowingTasks = new Permission();
        $knowingTasks->name         = 'knowing-tasks';
        $knowingTasks->display_name = 'Knowing Tasks'; // optional
        $knowingTasks->description  = 'Knowing Tasks'; // optional
        $knowingTasks->save();
    }
}
