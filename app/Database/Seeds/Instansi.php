<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instansi extends Seeder
{
    public function run()
    {
        $data_instansi = [
            [
                'id_instansi' => '1',
                'nama_instansi' => 'Universitas Lampung',
            ],
        ];

        // Using Query Builder
        foreach ($data_instansi as $data) {
            $this->db->table('instansi')->insert($data);
        }
    }
}
