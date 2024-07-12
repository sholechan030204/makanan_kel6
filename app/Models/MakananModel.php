<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table = 'cepat_saji';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_makanan', 'harga', 'deskripsi', 'review'];

  
}
