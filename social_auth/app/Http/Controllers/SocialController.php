<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialController extends Controller
{
public function redirect() {
return Socialite::driver('facebook')->redirect();	
return Socialite::driver('twitter')->redirect();
return Socialite::driver('google')->redirect();	
}
public function callback(){
$user = Socialite::driver('facebook')->user();
$user = Socialite::driver('twitter')->user();
$user = Socialite::driver('google')->user();
	return ($user->getAvatar());
	}
}

