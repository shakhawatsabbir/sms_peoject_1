<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $user, $users;
    public function index()
    {
        return view('admin.home.home');
    }
    public function addUser()
    {
        return view('admin.user.add-user');
    }
    public function manageUser()
    {

        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }
    public function create(Request $request)
    {
        User::newUser($request);
        return redirect(route('add.user'))->with('massage','User info create successfull');
    }
    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit',[
            'user'=>$this->user
        ]);
    }
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect(route('manage.user'))->with('massage','Update user info successfully');
    }
    public function delete($id)
    {
        $this->user = User::find($id);
    }
}
