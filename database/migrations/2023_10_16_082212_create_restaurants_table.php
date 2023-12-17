<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('region_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->decimal('minimum_charge')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('img')->nullable();
            $table->string('phone');
            $table->integer('city_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('email');
            $table->string('password');
            $table->enum('availability', array('open', 'closed'))->nullable();
//            $table->string('api_token',60);
//            $table->string('code',6)->nullable();
//            $table->boolean('activated')->default(1);
            $table->foreign('category_id')->references('id')
                ->on('categories')  ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
