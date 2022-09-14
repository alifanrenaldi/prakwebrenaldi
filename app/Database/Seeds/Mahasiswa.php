<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051044',
                'nama'    => 'Alifan Renaldi',
                'alamat' => 'natar jaya',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051099',
                'nama'    => 'Mulyono',
                'alamat' => 'tulung agung',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051025',
                'nama'    => 'ALif Renal',
                'alamat' => 'arab',
                'created_at' => Time::now(),
            ],
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
