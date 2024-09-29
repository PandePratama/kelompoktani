<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        
        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Tani Telaga',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Kintamani, Bangli, Bali',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_whatsapp',
            'label' => 'Whatsapp',
            'value' => 'https://www.whatsapp.com/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instragram.com/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Tani Telaga, dengan admin filament untuk website',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
