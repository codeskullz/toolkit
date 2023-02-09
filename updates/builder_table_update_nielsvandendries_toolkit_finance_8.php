<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesToolkitFinance8 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->date('datum')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->dateTime('datum')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
