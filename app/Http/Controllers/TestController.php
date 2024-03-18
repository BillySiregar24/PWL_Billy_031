<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function student()
    {
        $students = Student::query()
            ->with('teacher')
            ->paginate();
        return view('student', [
            'students' => $students
        ]);
    }

    public function teacher()
    {
        $teachers = Teacher::with('students')
            ->get();
        return view('teacher', [
            'teachers' => $teachers
        ]);
    }

    public function index()
    {
        $name = "Cak Imin";
        return view('test', [
            'namaCawapres1' => $name
        ]);
    }

    public function read($judul)
    {
        echo $judul;
    }


}
