<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\MaterialModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        return view('dashboard/index', $data);
    }

    public function showMaterials($courseId)
    {
        $materialModel = new MaterialModel();
        $data['materials'] = $materialModel->where('course_id', $courseId)->findAll();

        return view('dashboard/materials', $data);
    }
    // DashboardController.php

    public function materials()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        // ... kode lain yang diperlukan

        return view('dashboard/materials', $data);
    }
}
