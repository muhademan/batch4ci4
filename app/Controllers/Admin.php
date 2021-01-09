<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Berita_m;

class Admin extends BaseController
{

    function index()
    {
        $beritamodel = new Berita_m();
        $data['berita'] = $beritamodel->getberita();
        return view('admin/index', $data);
    }

    function add_data()
    {
        return view('admin/add_data');
    }

    function save_data()
    {
        $Judul = $this->request->getPost('judul');
        $Isi = $this->request->getPost('isi');
        $model = new Berita_m();
        $model->save_data($Judul, $Isi);
        return redirect()->to(base_url('admin/index'));
    }
    function delete($id)
    {
        $model = new Berita_m();
        $model->delete_data($id);
        return redirect()->to(base_url('admin/index'));
    }
}
