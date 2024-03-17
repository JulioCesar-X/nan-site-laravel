<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index() {

        $user = Auth::user(); // pega todos os cousers

        return view("pages.page.start", ['user' => $user]);
    }
}
