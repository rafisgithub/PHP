<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class RegistrationController extends Controller
{
    public function index(Request $request){
        
        $todo = new Todo();
        $todo->firstName = $request->firstName;
        $todo->lastName = $request->lastName;
        $todo->email = $request->email;
        $todo->password = $request->password;
        $todo->confirmPassword = $request->confirmPassword;
        $todo->save();
        return back()->with('message','Registration successfull');
    }
}
