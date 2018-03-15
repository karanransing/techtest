<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {	
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required',
            'contact'=> 'required|numeric|min:10',
            'gender' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {   
        $data = $request->all();
       /* $validation_flag = $this->validator($data);
        return response()->json(['responseText' => $validation_flag], 200);*/
        $validator = Validator::make($data, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required',
            'contact'=> 'required|numeric|digits:10',
            'gender' => 'required',

        ]);
        if ($validator->passes()) {
			/*return response()->json(['success'=>'Added new records.']);*/
			$result =  User::create([
            	'name' => $data['name'],
            	'email' => $data['email'],
            	'password' => bcrypt($data['password']),
           		'address'=> $data['address'],
            	'contact'=> $data['contact'],
            	'gender'=> $data['gender'],
        	]);

	       if($result)
	       {
	            return response()->json(['responseText' => 'Success'], 200);
	       }
	       else
	       {
	            return response()->json(['responseText' => 'Error'], 500);
	       }
        }
        else
        {
        	 return response()->json(['error'=>$validator->errors()->all()]);
        }
    }
}
