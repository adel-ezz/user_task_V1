<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Adminpanel extends Controller
{
    //

    //show user
    public function showusers()
    {
        $users=User::latest()->get();

        return view('adminpanel.users.index',compact('users'));
    }
    //Show user edit Form
    public function Edituser($id)
    {
        $user=User::findOrFail($id);
        return view('adminpanel.users.edit',compact('user'));
    }
    //Updated User
    public function Updateuser($id,Request $request)
    {
        $user=User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
        ]);
        $user->name = $request->name;
        $user->save();
        session()->flash('success', 'Edited');
        return redirect()->back();
    }
    //DElete specific user
    public function deleteuser($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        session()->flash('success', 'Deleted');
        return redirect()->back();
    }
}
