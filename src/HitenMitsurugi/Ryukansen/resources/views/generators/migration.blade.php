<?php echo '<?php' ?>
<?php echo PHP_EOL ?>

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RyukansenSetupTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_name');
            $table->integer('permission_id')->unsigned()->nullable();
            $table->integer('menus_id')->unsigned()->nullable(); // Parent
            $table->integer('sort')->nullable();
            $table->string('icon_class')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            $table
                ->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table
                ->foreign('menus_id')
                ->references('id')
                ->on('menus')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
