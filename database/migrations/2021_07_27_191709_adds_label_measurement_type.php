<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddsLabelMeasurementType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('labels_measurement_type')->after('labels_per_page')->default('in');
            $table->string('old_labels_measurement_type')->after('labels_measurement_type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('labels_measurement_type');
            $table->dropColumn('old_labels_measurement_type');
        });
    }
}
