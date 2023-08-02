<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'fname' => 'required|max:191',
            'lname' => 'required|max:191',
            'email' => 'required|email|max:191|unique:customers,email',
            'password' => 'required|min:8',
        ]);

        if($validator->fails()){
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else{
            $customer = Customer::create([
                'firstName' => $request->fname,
                'lastName' => $request->lname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $token = $customer->createToken($customer->email.'_Token')->plainTextToken;

            return response()->json([
                'status' => 200,
                'username' => $customer->firstName,
                'userID' => $customer->id,
                'token' => $token,
                'message' => 'Registered Successfully',
            ]);
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|max:191',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else{
            $customer = Customer::where('email', $request->email)->first();

            if(! $customer || ! Hash::check($request->password, $customer->password)){
                return response()->json([
                    'status' => 401,
                    'message' => 'Invalid Credentials',
                ]);
            } else{
                $token = $customer->createToken($customer->email.'_Token')->plainTextToken;

                return response()->json([
                    'status' => 200,
                    'username' => $customer->firstName,
                    'userID' => $customer->id,
                    'token' => $token,
                    'message' => 'You are now logged in',
                ]);
            }
        }
    }

    public function logout(Customer $customer) {
        $customer->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'You are now logged out .',
        ]);

    }
}
