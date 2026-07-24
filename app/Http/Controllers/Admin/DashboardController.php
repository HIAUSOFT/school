<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::limit(10)->get();
        return view('admin.dashboard', compact('students'));
    }
}
