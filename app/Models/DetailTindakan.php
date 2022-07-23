<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTindakan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail_tindakan_pasien';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_rm', 'kode_poli', 'kode_tindakan', 'kode_obat', 'id_dokter', 'deskripsi'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function insertTindakan($data) {
        $this->db->transStart();
        foreach ($data['array_kode_tindakan'] as $kode_tindakan) {
            $this->insert([
                'id_dokter' => $data['id_dokter'],
                'id_antrian' => $data['id_antrian'],
                'no_rm' => $data['no_rm'],
                'kode_tindakan' => $kode_tindakan
            ]);
        }

        foreach ($data['array_kode_obat'] as $kode_obat) {
            $this->insert([
                'id_dokter' => $data['id_dokter'],
                'id_antrian' => $data['id_antrian'],
                'no_rm' => $data['no_rm'],
                'kode_obat' => $kode_obat
            ]);
        }
        $this->db->transComplete();

        return true;
    }
}
