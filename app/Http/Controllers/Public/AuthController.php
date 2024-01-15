<?php

namespace App\Http\Controllers\Public;

use App\Models\Center;
use App\Models\PublicUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Public\RegisterRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.register',['centers'=> Center::all()]);
    }
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        PublicUser::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
            'phone'=> $data['phone'],
            'nid'=> $data['nid'],
            'center_id'=> 5,
        ]);
        return redirect()->back()->with('success','You have successfully Register. Rest will send to your inbox');
    }
}
