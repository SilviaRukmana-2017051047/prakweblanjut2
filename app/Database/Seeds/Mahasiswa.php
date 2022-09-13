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
                'npm' => '2017051047',
                'nama'    => 'Silvia Rukmana',
                'alamat'    => 'Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051015',
                'nama'    => 'safiira',
                'alamat'    => 'Bandar Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051033',
                'nama'    => 'irma',
                'alamat'    => 'Lampung Selatan',
                'created_at'    => Time::now(),
            ],
        ];

        // Simple Queries
        foreach($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }

    }
}
