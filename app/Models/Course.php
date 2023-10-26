<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    

class Course extends Model
{
    use HasFactory;
//Relation entre la table "courses" et la table "teachers" (Un professeur peut enseigner plusieurs cours) :
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    //Relation entre la table "courses" et la table "students" (Un cours peut avoir plusieurs étudiants, et un étudiant peut suivre plusieurs cours) :

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }


}
