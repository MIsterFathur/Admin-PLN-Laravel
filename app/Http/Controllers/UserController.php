<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        $data = User::get();
        return view('users.index', compact('data'));
    }

    public function create () {
        return view('users.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'required',
            'user_pos'  => 'required', // tambahkan validasi ini
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']      = $request->email;
        $data['name']       = $request->name;
        $data['password']   = Hash::make($request->password);
        $data['user_alamat']      = $request->user_alamat;
        $data['user_hp']      = $request->user_hp;
        $data['user_pos']      = $request->user_pos;
        $data['user_role']      = $request->user_role;
        $data['user_aktif']      = $request->user_aktif;
        // dd($data);
        User::create($data);

        // $user = new User($request->input());
        // $user->password = Hash::make($request->password);
        // $user->save();
        return redirect()->route('user');
    }


    public function show(string $id) {
        //
    }


   public function edit($id) {
    $user = User::find($id);

    return view('users.edit', compact('user')); // Ubah $data menjadi $user
    }

    public function update(Request $request, string $id) {
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
        'name' => 'required',
        // 'user_alamat' => 'required',
        // 'user_hp' => 'required',
        // 'user_pos' => 'required',
        // 'user_role' => 'required',
        // 'user_aktif' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = User::find($id);

    $user->email = $request->email;
    $user->name = $request->name;
    $user->password = Hash::make($request->password);
    // $user->user_alamat = $request->user_alamat;
    // $user->user_hp = $request->user_hp;
    // $user->user_pos = $request->user_pos;
    // $user->user_role = $request->user_role;
    // $user->user_aktif = $request->user_aktif;

    $user->save();

    return redirect()->route('user');
    }

    public function destroy(string $id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user');
    }

    //
}