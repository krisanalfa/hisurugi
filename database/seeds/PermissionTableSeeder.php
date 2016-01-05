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

        $listingBudget = new Permission();
        $listingBudget->name         = 'listing-budget';
        $listingBudget->display_name = 'Listing Budget'; // optional
        $listingBudget->description  = 'Listing Budget'; // optional
        $listingBudget->save();

        $creatingBudget = new Permission();
        $creatingBudget->name         = 'creating-budget';
        $creatingBudget->display_name = 'Creating Budget'; // optional
        $creatingBudget->description  = 'Creating Budget'; // optional
        $creatingBudget->save();

        $updatingBudget = new Permission();
        $updatingBudget->name         = 'updating-budget';
        $updatingBudget->display_name = 'Updating Budget'; // optional
        $updatingBudget->description  = 'Updating Budget'; // optional
        $updatingBudget->save();

        $deletingBudget = new Permission();
        $deletingBudget->name         = 'deleting-budget';
        $deletingBudget->display_name = 'Deleting Budget'; // optional
        $deletingBudget->description  = 'Deleting Budget'; // optional
        $deletingBudget->save();

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
