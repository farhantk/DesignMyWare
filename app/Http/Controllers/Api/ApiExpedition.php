<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\expedition;


class ApiExpedition extends Controller
{
    public function index()
{
    $expeditions = Expedition::all();
    return response()->json(compact('expeditions'));
}
}