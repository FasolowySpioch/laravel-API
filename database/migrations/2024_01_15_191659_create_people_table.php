<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException: The GET method is not supported for route ap
     * i/add-human. Supported methods: POST. in file C:\Users\fasol\Desktop\studia_repozytorium\laravel-API\vendor\laravel\framework\src\Illuminate\Routing\AbstractRouteCollection.php on line 122

     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
