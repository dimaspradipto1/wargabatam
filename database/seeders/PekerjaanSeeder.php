<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['pekerjaan' => 'Wiraswasta'],
            ['pekerjaan' => 'BUMN'],
            ['pekerjaan' => 'PNS'],
            ['pekerjaan' => 'Wirausaha'],
            ['pekerjaan' => 'Nelayan'],
            ['pekerjaan' => 'Ibu Rumah Tangga'],
            ['pekerjaan' => 'Pelajar/Mahasiswa'],
            ['pekerjaan' => 'Tidak Bekerja'],
        ];

        foreach ($data as $value) {
            Pekerjaan::insert([
                'pekerjaan' => $value['pekerjaan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
