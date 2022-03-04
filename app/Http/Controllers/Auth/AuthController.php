<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /** Show login form
     * 
     * 
     */
    public function login() {
        
        return view('auth.login', [
            'page' => 'login',
        ]);
    }

    /** User has attempted to log in with credentials
     * 
     * 
     */
    public function loggingIn(Request $request) {

        dd( $request );
    }

    /** Show register form
     * 
     * 
     */
    public function register() {
        
        return view('auth.register', [
            'page' => 'register'
        ]);
    }

    /** User has submit register form
     * 
     * 
     */
    public function registerNewUser(Request $request) {
        
        dd( $request );
    }
}
