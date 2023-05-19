<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class ApiUserProfile extends Controller
{
    public function getProfile(Request $request)
    {
        $user = User::find(Auth::id());
        if (!$user) {
            return response()->json(['error' => $user], 401);
        }

        return response()->json(['message' => 'Profil', 'data' => $user], 200);
    }
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());
        if (!$user) {
            return response()->json(['error' => $user], 401);
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'photo' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'phone_number' => 'max:14',
            'province' => 'max:50',
            'city' => 'max:50',
            'subdistrict' => 'max:50',
            'ward' => 'max:50',
            'zip' => 'max:10',
            'street' => 'max:255',
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('post-image');
        }

        $user->update($validatedData);

        return response()->json(['message' => 'Profil berhasil diubah', 'data' => $user], 200);
    }
}