<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showLogin()
    {
        return view('login');
    }

    public function showSignup()
    {
        return view('signup');
    }

    public function success()
    {
        return view('success');
    }

    public function signup(Request $request)
    {
        $data = $request->validate([
            'username'=>'required|string',
            'name'=>'required|string',
            'email'=>'required|email|string|unique:users,email',
            'region'=>'string|nullable',
            'avatar'=>'string|nullable',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:3',
            'password_confirmation' => 'min:3'
        ]);

        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'region' => $data['region'],
            'avatar' =>$data['avatar'],
            'password' => bcrypt($data['password'])
        ]);


        return redirect()->route('user.success');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|string|exists:users,email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            return redirect()->route('login')->withErrors($credentials)->withInput();
        }

        $user = Auth::user();

        return view("home", ["user" => $user]);

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

}
