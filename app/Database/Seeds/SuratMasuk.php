<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SuratMasuk extends Seeder
{
    public function run()
    {
        $data_suratmasuk = [
            [
                'no_surat' => '1',
                'isi_surat' => 'tes',
                'created_at' => Time::now()
            ],
        ];

        // Using Query Builder
        foreach ($data_suratmasuk as $data) {
            $this->db->table('surat_masuk')->insert($data);
        }
    }
}
