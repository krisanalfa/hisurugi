<?php

namespace HitenMitsurugi\Ryukansen\Commands;

use Illuminate\Console\Command;

class MigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ryukansen:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Ryukansen setup table.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $migrationFile = base_path("database/migrations")."/".date('Y_m_d_His')."_ryukansen_setup_tables.php";

        if (!file_exists($migrationFile) and $fs = fopen($migrationFile, 'x')) {
            $this->laravel->view->addNamespace('ryukansen', realpath(dirname(__DIR__).'/resources/views'));

            $output = $this->laravel->view->make('ryukansen::generators.migration')->render();

            fwrite($fs, $output);
            fclose($fs);

            return $this->info("Migration successfully created!");
        }

        $this->error(
            "Couldn't create migration.\n Check the write permissions".
            " within the database/migrations directory."
        );
    }
}
