<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    // READ + SEARCH
    public function index(Request $request)
    {
        $query = UserRegistration::query();

        if ($request->search) {
            $query->where('email', 'like', '%' . $request->search . '%');
        }

        $users = $query->get();

        return view('index', compact('users'));
    }

    // CREATE PAGE
    public function create()
    {
        return view('create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        UserRegistration::create([
            'name' => $request->name,
            'email' => $request->email,
            'cnic' => $request->cnic,
            'telephone' => $request->telephone,
            'comments' => $request->comments,
            'image' => $imageName,
        ]);

        return redirect('/');
    }

    // EDIT PAGE
    public function edit($id)
    {
        $user = UserRegistration::findOrFail($id);
        return view('edit', compact('user'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $user = UserRegistration::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'cnic' => $request->cnic,
            'telephone' => $request->telephone,
            'comments' => $request->comments,
        ]);

        return redirect('/');
    }

    // DELETE DATA
    public function delete($id)
    {
        $user = UserRegistration::findOrFail($id);
        $user->delete();

        return redirect('/');
    }
}