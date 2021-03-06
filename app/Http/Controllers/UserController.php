<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Role;

class UserController extends Controller
{
	public function index() {

		$users = User::all();

		return view('admin.users.index', ['users' => $users]);
	}

	public function show(User $user) {

		return view('admin.users.profile', [
			'user' => $user,
			'roles' => Role::all()
		]);

	}

	public function profile(User $user) {

		return view('profile',[
			'user' => $user,
		]);

	}

	public function update(User $user) {

		$inputs = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'file' => ['file'],
		]);

		if(request('avatar')) {
			$inputs['avatar'] = request('avatar')->store('images');
		}

		if(request('password')) {
			request()->validate([
				'password' => ['min:8', 'max:255'],
				'password_confirmation' => ['required','same:password', 'min:8', 'max:255']
			]);
				$inputs['password'] = request('password');
		}

		$user->update($inputs);

		return back();

	}

	public function attach(User $user) {

		$user->roles()->attach(request('role'));

		return back();
	}

	public function detach(User $user) {

		$user->roles()->detach(request('role'));

		return back();
	}

	public function destroy(User $user) {

		$user->delete();
		session()->flash('user-deleted', 'User has been deleted');

		return back();

	}
    //
}
