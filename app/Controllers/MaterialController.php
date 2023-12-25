<?php

namespace App\Controllers;

use App\Models\MaterialModel;
use App\Models\CourseModel;

class MaterialController extends BaseController
{
    protected $materialModel;

    public function __construct()
    {
        $this->materialModel = new MaterialModel();
    }

    // Fungsi untuk menampilkan daftar materi dalam sebuah kursus
    public function index()
    {
        $data['materials'] = $this->materialModel->findAll();
        return view('materials/index', $data);
    }


    // Fungsi untuk menampilkan form pembuatan materi
    public function create()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        echo view('materials/create', $data);
    }

    // Fungsi untuk menyimpan materi baru
    public function store()
    {
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'embed_link' => $this->request->getVar('embed_link')
        ];

        $this->materialModel->save($data);

        return redirect()->to('/materials');
    }

    // Fungsi untuk menampilkan form edit materi
    public function edit($id)
    {
        $materialModel = new MaterialModel();
        $courseModel = new CourseModel();

        $data['material'] = $materialModel->find($id);
        $data['courses'] = $courseModel->findAll();

        echo view('materials/edit', $data);
    }

    // Fungsi untuk mengupdate materi
    public function update($id)
    {
        $materialModel = new MaterialModel();
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'embed_link' => $this->request->getVar('embed_link')
        ];

        $materialModel->update($id, $data);
        return redirect()->to('/materials/' . $this->request->getVar('course_id'));
    }

    // Fungsi untuk menghapus materi
    public function delete($id)
    {
        $material = $this->materialModel->find($id);

        if ($material) {
            $this->materialModel->delete($id);
            return redirect()->to('/materials');
        } else {
            // Materi tidak ditemukan, handle sesuai kebutuhan aplikasi Anda
            return redirect()->to('/materials'); // atau tindakan lainnya
        }
    }
    // MaterialController.php

    public function addToCourse()
    {
        $materialId = $this->request->getPost('material_id');
        $courseId = $this->request->getPost('course_id');

        // Logika untuk menambahkan materi ke kursus
        // Anda mungkin perlu menyesuaikan ini sesuai dengan struktur database Anda
        $this->materialModel->addMaterialToCourse($materialId, $courseId);

        return redirect()->to('/dashboard/showMaterials/' . $courseId);
    }
}
