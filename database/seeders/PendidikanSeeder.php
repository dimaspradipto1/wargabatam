<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['pendidikan' => 'S3'],
            ['pendidikan' => 'S2'],
            ['pendidikan' => 'S1'],
            ['pendidikan' => 'SMA'],
            ['pendidikan' => 'SMP'],
            ['pendidikan' => 'SD'],
            ['pendidikan' => 'TK'],
            ['pendidikan' => 'Tidak Sekolah'],
        ];

        foreach ($data as $value) {
            Pendidikan::insert([
                'pendidikan' => $value['pendidikan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
