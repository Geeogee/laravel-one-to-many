<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Table('tasks', function (Blueprint $table) {

            $table -> foreign('employee_id', 'task_employee')
                   -> references('id')
                   -> on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::Table('tasks', function (Blueprint $table) {

            $table -> dropForeign('task_employee');
        });
    }
}
