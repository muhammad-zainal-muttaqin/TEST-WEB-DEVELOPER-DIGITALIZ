<?php

namespace App\Controllers;

use App\Models\CourseModel;

class CourseController extends BaseController
{
    protected $courseModel;

    public function __construct()
    {
        $this->courseModel = new CourseModel();
    }

    public function index()
    {
        $data['courses'] = $this->courseModel->getAllCourses();
        return view('courses/index', $data);
    }

    // Fungsi untuk menampilkan form pembuatan kursus
    public function create()
    {
        return view('courses/create');
    }

    // Fungsi untuk menyimpan kursus baru
    public function store()
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'duration' => $this->request->getVar('duration')
        ];

        $this->courseModel->save($data);
        return redirect()->to('/courses');
    }

    // Fungsi untuk menampilkan form edit
    public function edit($id)
    {
        helper('form');
        $data['course'] = $this->courseModel->find($id);
        return view('courses/edit', $data);
    }

    // Fungsi untuk mengupdate kursus
    public function update($id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'duration' => $this->request->getVar('duration')
        ];

        $this->courseModel->update($id, $data);
        return redirect()->to('/courses');
    }

    // Fungsi untuk menghapus kursus
    public function delete($id)
    {
        $this->courseModel->delete($id);
        return redirect()->to('/courses');
    }
}
