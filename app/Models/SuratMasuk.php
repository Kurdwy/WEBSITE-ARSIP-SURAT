<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasuk extends Model
{
    protected $table            = 'surat_masuk';
    protected $primaryKey       = 'id_surat_masuk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['no_surat', 'tgl_terima_surat', 'tgl_surat', 'asal_surat', 'isi_surat', 'keterangan_surat'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
