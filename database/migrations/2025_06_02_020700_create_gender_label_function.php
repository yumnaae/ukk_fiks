<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            DROP FUNCTION IF EXISTS gender_label;
        ');

        DB::unprepared('
            CREATE FUNCTION gender_label(gender CHAR(1))
            RETURNS VARCHAR(20)
            DETERMINISTIC
            BEGIN
                RETURN CASE gender
                    WHEN "L" THEN "Laki-laki"
                    WHEN "P" THEN "Perempuan"
                    ELSE "Tidak diketahui"
                END;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP FUNCTION IF EXISTS gender_label;');
    }
};