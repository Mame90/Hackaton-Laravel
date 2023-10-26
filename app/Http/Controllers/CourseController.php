<?php

// CourseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function mescours()
    {
        $courses = Course::all(); // Vous pouvez ajuster cela en fonction de la logique de récupération des cours
        return view('mescours', ['courses' => $courses]);
    }

    public function voirCours($id)
    {
        // Logique pour récupérer les données du cours si nécessaire
        return view('voirCours');
    }

}
