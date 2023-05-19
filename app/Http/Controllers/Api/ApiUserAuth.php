<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class ApiUserAuth extends Controller
{
    public function signIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->isAdmin) {
            $error = "Email tidak terdaftar";
            return response()->json(['error' => $error], 401);
        }

        if (!Hash::check($request->password, $user->password)) {
            $error = "Password salah";
            return response()->json(['error' => $error], 401);
        }

        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'access_token' => $tokenResult,
            'token_type'=>'Bearer',
            'data'=>$user,
            'massage'=>'SignIn success'
        ], 200);
    }

    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm-password' => 'required|min:8|required_with:password|same:password'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $validatedData = $validator->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        User::create($validatedData);
        $user = User::where('email', $request->email)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;
        return response()->json([
            'access_token' => $tokenResult,
            'token_type'=>'Bearer',
            'user'=>$user,
            'massage'=>'SignUp success'
        ], 200);
    }

    public function signOut(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Berhasil keluar'], 200);
    }
}