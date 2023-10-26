<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create()
{
    
    return view('admin.teachers.create');
}
public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:teachers',
        'phone' => 'required',
    ]);

    // Création de l'enseignant
    Teacher::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
    ]);

    // Redirection avec un message de succès
    return redirect()->route('admin.teachers.index')->with('success', 'Enseignant ajouté avec succès.');
}
//    *******************************************************************************

public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);
    
        if (!$teacher) {
            // Professeur introuvable, vous pouvez gérer cette situation, par exemple, rediriger vers la liste des professeurs.
            return redirect()->route('admin.teachers.index')->with('error', 'Professeur introuvable');
        }
    
        return view('admin.teachers.show', ['teacher' => $teacher]);
    }
    
public function edit($id)
{
    $teacher = Teacher::find($id);
    return view('admin.teachers.edit', compact('teacher'));
}

public function update(Request $request, $id)
{
    $teacher = Teacher::find($id);
    $teacher->update($request->all());
    return redirect()->route('admin.teachers.index')->with('success', 'Professeur mis à jour avec succès.');
}

public function destroy($id)
{
    $teacher = Teacher::find($id);
    $teacher->delete();
    return redirect()->route('admin.teachers.index')->with('success', 'Professeur supprimé avec succès.');
}

// ************************************************************************

public function ajoutcours()
{
    
    return view('admin.teachers.ajoutcours');
}
public function ajoutcourStore(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'start_date' =>'required',
        'end' =>'required',
    ]);
    
    $course = new Course();
    $course->title = $request->input('title');
    $course->description = $request->input('description');
    $course->start_date = $request->input('start_date');
    $course->end_date = $request->input('end_date');
    // Attribuez d'autres propriétés de cours si nécessaire
    $course->save();
    return redirect()->route('admin.teachers.index')->with('success', 'Cours ajouté avec succès.');  
    
    
}

// *********************************
}