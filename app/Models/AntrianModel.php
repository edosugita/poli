<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'antrian';
    protected $primaryKey       = 'id_antrian';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_rm', 'no_antrian', 'waktu', 'status', 'id_poli'];

    // Dates
    protected $useTimestamps = false;
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

    public function getAntrian($id)
    {
        return $this->db->table('antrian')
            ->join('data_pasien', 'antrian.no_rm = data_pasien.no_rm')
            ->join('poli', 'poli.id = antrian.id_poli')
            ->where(['poli.id' => $id])
            ->get()->getResultArray();
    }

    public function getIdAntrian($id)
    {
        return $this->db->table('antrian')
            ->join('data_pasien', 'antrian.no_rm = data_pasien.no_rm')
            ->join('poli', 'poli.id = antrian.id_poli')
            ->where(['id_antrian' => $id])
            ->get()->getResultArray();
    }
}
