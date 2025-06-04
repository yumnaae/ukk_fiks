<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddTriggerUpdateSiswaEmailWhenUserUpdated extends Migration
{
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER trg_update_siswa_email_after_user_update
            AFTER UPDATE ON users
            FOR EACH ROW
            BEGIN
                IF OLD.email != NEW.email THEN
                    UPDATE siswas
                    SET email = NEW.email
                    WHERE email = OLD.email;
                END IF;
            END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_siswa_email_after_user_update');
    }
}
