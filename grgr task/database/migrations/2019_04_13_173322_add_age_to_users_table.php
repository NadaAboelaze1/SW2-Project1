<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('users', function (Blueprint $table) {
         $table->integer('age')->after('password');
          $table->string('Address')->after('age');
            $table->date('DateOfBirth')->after('Address');
            $table->integer('PhoneNumber')->after('DateOfBirth');
            $table->boolean('Gender')->after('PhoneNumber');
            $table->integer('salary')->after('Gender');
            $table->string('branch')->after('salary');
            $table->integer('branch_id')->unsigned;
    $table->foreign('branch_id')->references('id')->on('branches');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users', function (Blueprint $table) {

        $table->dropColumn('age');
                });
    }
}
