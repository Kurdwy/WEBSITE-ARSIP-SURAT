<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('surat_masuk', ['tgl_terima_surat DATETIME']);
        $this->forge->addColumn('surat_masuk', ['tgl_surat DATETIME']);
        $this->forge->addColumn('surat_masuk', ['asal_surat VARCHAR(100)']);
        $this->forge->addColumn('surat_masuk', ['keterangan_surat VARCHAR(100)']);
    }

    public function down()
    {
        $this->forge->dropColumn('surat_masuk', 'tgl_terima_surat', 'tgl_surat', 'asal_surat', 'keterangan_surat');
    }
}
