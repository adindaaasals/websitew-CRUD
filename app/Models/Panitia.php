<?php

namespace App\Models;

use CodeIgniter\Model;

class Panitia extends Model
{
    protected $table            = 'tb_identitas';
    protected $primaryKey       = 'npm';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'npm', 'nama', 'alamat', 'tgl_lhr', 'divisi', 'jabatan'
    ];

    public function getPanitia($npm = false){
        if($npm == false) {
            return $this->findAll();
        } else {
            return $this->where('npm',$npm)->first();
        }
    }

    public function savePanitia($data) {
        return $this->insert($data);
    }

    public function updatePanitia($npm, $data) {
        return $this->update($npm, $data);
    }

    public function deletePanitia($npm) {
        return $this->delete($npm);
    }
}