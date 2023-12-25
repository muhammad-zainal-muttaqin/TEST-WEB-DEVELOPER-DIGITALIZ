<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'duration'];

    // Tambahan: fungsi untuk mendapatkan semua kursus
    public function getAllCourses()
    {
        return $this->findAll();
    }
}
