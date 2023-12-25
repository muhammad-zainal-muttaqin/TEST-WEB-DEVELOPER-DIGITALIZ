<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{
    protected $table = 'materials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['course_id', 'title', 'description', 'embed_link'];

    // Tambahan: fungsi untuk mendapatkan semua materi berdasarkan kursus
    public function getMaterialsByCourse($courseId)
    {
        return $this->where('course_id', $courseId)->findAll();
    }
    // MaterialModel.php

    public function addMaterialToCourse($data)
    {
        // Insert the data into the table that represents the relationship between courses and materials
        $this->db->table('course_materials')->insert($data);
    }
}
