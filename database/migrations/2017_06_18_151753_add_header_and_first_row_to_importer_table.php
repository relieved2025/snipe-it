<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeaderAndFirstRowToImporterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imports', function (Blueprint $table) {
            // Add a json string representing the header row of the csv, and the first row of the csv.
            $table->json('header_row')->nullable()->default(null);
            $table->json('first_row')->nullable()->default(null);
            $table->json('field_mappings')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imports', function (Blueprint $table) {
            //
            $table->dropColumn('header_row');
            $table->dropColumn('first_row');
            $table->dropColumn('field_mappings');
        });
    }
}
