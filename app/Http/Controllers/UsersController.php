<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>['login','loginPage']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function loginPage()
    {
        return view('backlog.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'captcha'=>'required|captcha',
        ],[
            'captcha.required' => 'please enter captcha code',
            'captcha.captcha' => 'captcha code is not correct'
        ]);



        $user = new User();
        $user = $user
            ->where('email', $email)
            ->get()->first();


        if (Auth::attempt(['email' => $email, 'password' => $password],$request->has('remember'))) {
            session()->flash('success', 'Welcome');
            return redirect()->route('home', [Auth::user()]);
        }elseif(empty($user)) {
                session()->flash('danger', 'Email address is not existed');
                return redirect()->back();
        }elseif($password != $user->password) {
                    session()->flash('danger', 'Incorrect Password, Please try again');
                    return redirect()->back();
        }else {
            session()->flash('danger', 'Service is not available, Please try again');
            return redirect()->back();
        }
    }






    public function logout()
    {
        Auth::logout();
        return view('backlog.login');
    }
}
