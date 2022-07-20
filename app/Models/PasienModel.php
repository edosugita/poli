<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_pasien';
    protected $primaryKey       = 'no_rekam_medis';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_rekam_medis', 'id_desa', 'id_agama', 'id_darah', 'id_pekerjaan', 'id_asuransi', 'nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telepon', 'jenis_pasien', 'nama_wali', 'nomor_wali', 'nomor_asuransi', 'status_perkawinan', 'alamat_ktp', 'umur'];

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

    public function getCount()
    {
        return $this->db->table('data_pasien')->selectCount('no_rekam_medis')->get()->getResultArray();
    }
}
