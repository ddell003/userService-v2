<?php

use App\Beverage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beverages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('caffeine')->default(0);
            $table->integer('servings')->default(1);
            $table->timestamps();
        });


        $drinks = [
            [
                'name'=>'Monster Ultra Sunrise',
                'description'=>'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
                'caffeine'=>'75',
                'servings'=>2
            ],
            [
                'name'=>'Black Coffee',
                'description'=>'lack Coffee The classic, the average 8oz. serving of black coffee has 95mg of caffeine',
                'caffeine'=>'95',
                'servings'=>1
            ],
            [
                'name'=>'Americano',
                'description'=>'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving.',
                'caffeine'=>'77',
                'servings'=>1
            ],
            [
                'name'=>'Sugar free NOS',
                'description'=>' Sugar free NOS Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings',
                'caffeine'=>'130',
                'servings'=>2
            ],
            [
                'name'=>'5 Hour Energy',
                'description'=>'5 Hour Energy And amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going',
                'caffeine'=>'200',
                'servings'=>1
            ]
        ];

        foreach($drinks as $drink){
            $beverage = new Beverage();
            $beverage->name = $drink['name'];
            $beverage->description = $drink['description'];
            $beverage->caffeine = $drink['caffeine'];
            $beverage->servings = $drink['servings'];
            $beverage->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beverages');
    }
}
