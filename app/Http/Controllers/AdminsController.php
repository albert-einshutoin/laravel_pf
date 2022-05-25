<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class AdminsController extends Controller
{

	public function index(User $user) {

		return view('admin.index', [
			'user' => $user,
		]);

	}
    //
}
