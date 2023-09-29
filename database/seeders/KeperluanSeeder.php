<?php

namespace Database\Seeders;

use App\Models\Keperluan;
use Illuminate\Database\Seeder;

class KeperluanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['keperluan' => 'Pembuatan KK'],
            ['keperluan' => 'Pembuatan KTP'],
            ['keperluan' => 'Surat Pengantar Kelahiran'],
            ['keperluan' => 'Surat Keterangan Usaha'],
            ['keperluan' => 'Surat Keterangan Pindah'],
            ['keperluan' => 'Surat Ket. Perubahan Data'],
            ['keperluan' => 'Surat Kematian'],
            ['keperluan' => 'Surat Pengantar Nikah'],
            ['keperluan' => 'Surat Keterangan Domisili'],
            ['keperluan' => 'Surat Domisili Usaha'],
            ['keperluan' => 'Surat Pengantar Tidak Mampu (SPTM)'],
        ];

        foreach ($data as $value) {
            Keperluan::insert([
                'keperluan' => $value['keperluan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
