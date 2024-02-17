<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {

        // $users = \app\Models\User::paginate(10);
        $users = DB::table('users')
        ->when($request->input('name'), function ($query, $name){
            return $query->where('name', 'like', '%'.$name.'%');
        })
        ->orderBy('id','asc')
        ->paginate(10);
        return view('pages.users.index', compact('users'));

    }

    // function hapus data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        // Update ID
        User::where('id', '>', $id)->decrement('id');

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    // function edit data user
    public function update(Request $request, $id)
{
    $request->validate([
        'point' => 'required|numeric',
        'rupiah' => 'required|numeric',
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'point' => $request->point,
        'rupiah' => $request->rupiah,
    ]);

    return redirect()->route('users.index')->with('success', 'User updated successfully');
}

}
