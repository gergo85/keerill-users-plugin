<?php namespace KEERill\Users\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('oc_users', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string("name")->nullable();
            $table->string('email')->unique();
            $table->integer('group_id')->default(1);
            $table->string('ip_address');
            $table->text('permissions')->nullable();

            $table->string('password');

            $table->boolean('is_activated')->default(0);
            $table->string('activation_code')->nullable()->index();

            $table->string('persist_code')->nullable();
            $table->string('reset_password_code')->nullable()->index();

            $table->timestamp('last_seen')->nullable();
            $table->timestamp('activated_at')->nullable();

            $table->boolean('is_banned')->default(false);
            $table->timestamp('is_banned_at')->nullable();
            $table->string('is_banned_reason')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oc_users');
    }
}
