<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function viewusers($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('users')->with('status', "user deleted successfully");
    }
    public function editusers($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->update();
        return redirect('view-user/'.$users->id)->with('status', "Users updated successfully");
    }
}
