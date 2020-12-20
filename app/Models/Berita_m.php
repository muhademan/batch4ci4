<?php

namespace App\Models;

use CodeIgniter\Model;

class Berita_m extends Model
{
    function getberita()
    {
        $db = \config\Database::connect();
        $builder = $db->table('berita');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
