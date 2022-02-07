<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\DB;
use PDO;

class AuthController extends Controller
{
    /** 
     * @return View
    */
    public function showLogin()
    {
        if (session()->has('user')){
            return redirect('/home');
        }
        return view('login.login_form');
    }

    /** 
     * @param App\Http\Requests\LoginFormRequest
    */
    public function Login(LoginFormRequest $request)
    {
        $salesman_id = $request->input('v_salesman_id');
        $password = $request->input('password');

        // return json_encode(DB::select("select @@version"));

        try {
            DB::connection('sqlsrv_dev')->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        $user = DB::connection('sqlsrv_dev')->table('VM_Login')
        ->where('v_salesman_id', '=', $salesman_id)
        ->where('password', '=', $password)
        ->value('employee_name');
        if($user) {
            $user_session = $request->get('v_salesman_id');
            session(['user' => $user_session]);
            return redirect('/home');
        }
        else{
            return back()->withErrors(['errors' => 'IDかパスワードが間違っています。']);
        }
    }

    /** 
     * @return View
    */
    public function Logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
