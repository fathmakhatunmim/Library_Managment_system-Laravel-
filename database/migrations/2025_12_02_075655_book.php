<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
          
             Schema::create('BookList', function (Blueprint $table) {
            $table->id();
            $table->string('Book name');
            $table->string('Email');
            $table->string('position');
            $table->string('department');
        });

    }

   
    public function down(): void
    {
        
    }
};
