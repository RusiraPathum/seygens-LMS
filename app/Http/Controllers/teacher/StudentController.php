<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{
    public function index()
    {

        $user = User::all()->where('role', '=', '2');

        return view('dashboards.teacher.studentView', ['students' => $user]);

    }

    //Get signal student
    public function getSignalStudent($studentId)
    {

        $signalStudent = User::all()->where('id', '=', Crypt::decrypt($studentId));
//        return response()->json($signalStudent);
//        $signalStudent = json_encode($signalStudent);
        return view('dashboards.teacher.signalStudent', compact('signalStudent'));


    }

}
