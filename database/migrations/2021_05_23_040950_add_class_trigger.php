<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::unprepared('CREATE TRIGGER class AFTER INSERT ON classes FOR EACH ROW
        BEGIN
            INSERT INTO users VALUES (NULL,NEW.sie_rohani, NEW.sie_rohani, NEW.contact, NEW.nis, "$2y$10$GfZ.roWWdzeUdS9yaeKiJumY963p6hcPIc4bRrQT3JN8uUr/k2waq" , "srohani",NEW.created_at, NEW.updated_at);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
