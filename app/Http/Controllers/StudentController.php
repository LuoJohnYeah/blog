<?php
namespace app\Http\Controllers;

class StudentController extends Controller
{
	public function index()
	{
		return view('student.index');
	}
}