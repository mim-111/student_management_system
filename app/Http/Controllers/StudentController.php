<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $student = Student::all();
        return view ('students.index')->with('students', $students);
    }
    //
}

public function create()
{

}

public function store(Request $request)
{

}
