<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleLoginCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $isUserExist = User::where('google_id', $user->id)->first();

            if($isUserExist){

                Auth::login($isUserExist);

                return redirect()->intended('dashboard');

            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('Aa@123456'),
                    'profile_photo_url' => $user->getAvatar()
                ]);
                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookLoginCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUserExist = User::where('fb_id', $user->id)->first();
            if($isUserExist){
                Auth::login($isUserExist);
                return redirect('/dashboard');
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->getName(),
                    'email' => $user->getId().'@facebook.com',
                    'fb_id' => $user->getId(),
                    'password' => Hash::make('Aa@123456'),
                    'profile_photo_url' => $user->getAvatar()
                ]);
                Auth::login($newUser);
                return redirect('/dashboard');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function zaloRedirect()
    {
        return Socialite::driver('zalo')->redirect();
    }

    public function handleZaloLoginCallback()
    {
        try {

            $user = Socialite::driver('zalo')->user();

            $isUserExist = User::where('zalo_id', $user->id)->first();

            if($isUserExist){

                Auth::login($isUserExist);

                return redirect()->intended('dashboard');

            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->getName(),
                    'email' => $user->getId().'@zalo.vn',
                    'zalo_id'=> $user->getId(),
                    'password' => Hash::make('Aa@123456'),

                ]);
                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
