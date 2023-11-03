<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('~cb-service-name~')) {
            // // The "users" table exists...
            // for loop to check each field before create or alter
            // if (Schema::hasColumn('~cb-field-name~', 'email')) {
            //     // The "users" table exists and has an "email" column...
            // }
            // else {
            //     Schema::table('~cb-service-name~', function (Blueprint $table) {
            //         $table->id();
            //         $table->string('name');

$table->string('email');

$table->string('password');

            //         $table->timestamps();
            //     });
            // }
        }
        else {
            Schema::create('~cb-service-name~', function (Blueprint $table) {
                $table->id();
                $table->string('name');

$table->string('email');

$table->string('password');

                $table->timestamps();
            });
        }


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('~cb-service-name~');
    }
};
