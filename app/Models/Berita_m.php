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

    function save_data($judul, $isi)
    {
        $db = \config\Database::connect();
        $data = array(
            'Judul' => $judul,
            'Isi' => $isi
        );
        $query = $this->db->table('berita')->insert($data);
        return $query;
    }
    function delete_data($id)
    {
        $query = $this->db->table('berita')->delete(array(
            'IdBerita' => $id
        ));
        return $query;
    }
}
