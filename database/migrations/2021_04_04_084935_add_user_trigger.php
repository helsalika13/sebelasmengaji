<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class AddUserTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::unprepared('CREATE TRIGGER user AFTER INSERT ON teachers FOR EACH ROW
        BEGIN
            INSERT INTO users VALUES (NULL,NEW.name, NEW.name, NEW.contact, NEW.nip, "$2y$10$34o1H.eqkA.8ZuVenxwHCu/.wPyJm3DwFwo8jI/ypfZkxwkIKPLQa" , "admin",NEW.created_at, NEW.updated_at);
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
