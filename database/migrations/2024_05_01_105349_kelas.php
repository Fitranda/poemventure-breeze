<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kelas')->unique();
            $table->string('Nama');
            $table->longText('Deskripsi')->nullable();
            $table->bigInteger('GuruID');
            $table->timestamps();
        });

        Schema::create('KelasDetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('KelasID');
            $table->bigInteger('SiswaID');
            $table->bigInteger('Nilai')->default(0);
            $table->timestamps();
        });

        Schema::create('Soal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('KelasID');
            $table->integer('BAB');
            $table->integer('no_soal');
            $table->longText('Soal');
            $table->Text('jawaban1')->comment('A');
            $table->Text('jawaban2')->comment('B');
            $table->Text('jawaban3')->comment('C');
            $table->Text('jawaban4')->comment('D');
            $table->tinyInteger('Kunci_Jawaban')->comment('1=A,2=B,3=C,4=D');
            $table->longText('Alasan')->comment('Penjelasan dari kunci jawaban');
            $table->timestamps();
        });

        Schema::create('SoalDetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('SoalID');
            $table->bigInteger('KelasDetailID');
            $table->tinyInteger('Jawaban')->comment('Jawaban Siswa (1=A,2=B,3=C,4=D)');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('darah')->after('roleid')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('darah');
        });
        Schema::dropIfExists('SoalDetail');
        Schema::dropIfExists('Soal');
        Schema::dropIfExists('KelasDetail');
        Schema::dropIfExists('Kelas');
    }
};
