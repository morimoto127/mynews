<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // 最新のプロフィールを取得する
        $profile = Profile::all()->sortByDesc('created_at')->first();
        // dd($profile);
        return view('profile.index', ['profile' => $profile]);
    }
}
