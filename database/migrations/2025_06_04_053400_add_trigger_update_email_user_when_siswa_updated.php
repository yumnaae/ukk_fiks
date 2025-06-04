<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddTriggerUpdateEmailUserWhenSiswaUpdated extends Migration
{
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER trg_update_user_email_after_siswa_update
            AFTER UPDATE ON siswas
            FOR EACH ROW
            BEGIN
                IF OLD.email != NEW.email THEN
                    UPDATE users
                    SET email = NEW.email
                    WHERE email = OLD.email;
                END IF;
            END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_user_email_after_siswa_update');
    }
}
