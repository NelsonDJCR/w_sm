<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Offeror;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\AbstractUser;
Use Laravel\Socialite\Facades\Socialite;
use App\Fixes\Monim67\Image as ImageHandler;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)
            ->redirect();
    }

    public function handleSocialLogin($origin, $provider)
    {
        session(['originUser' => $origin]);
        return Socialite::driver($provider)->redirect();
    }

    private function forgetOrigin()
    {
        if (session()->exists('originUser')) {
            session()->forget('originUser');
        }
    }

    public function handleError($customMessage = '')
    {
        flashy()->error(__('messages.unknown_error') . ' ' . $customMessage);
        $this->forgetOrigin();
        return redirect()->route('login');
    }


    private function offerorCreate(AbstractUser $socialUser, $provider)
    {
        $userParams = [
            'name' => $socialUser->getName(),
            'email' => $socialUser->getEmail(),
            'provider_id' => $socialUser->getId(),
            'provider' => $provider,
            'email_verified_at' => now()
        ];
        try {
            $offeror = Offeror::createFromParams($userParams);
            $this->saveUserAvatar($offeror->user, $socialUser);
        } catch (\Throwable $e) {
            return $this->handleError();
        }
        return $offeror->user;
    }

    private function customerCreate(AbstractUser $socialUser, $provider)
    {
        $userParams = [
            'name' => $socialUser->getName(),
            'email' => $socialUser->getEmail(),
            'provider_id' => $socialUser->getId(),
            'provider' => $provider,
            'email_verified_at' => now()
        ];
        try {
            $customer = Customer::createFromParams($userParams);
            $this->saveUserAvatar($customer->user, $socialUser);
        } catch (\Throwable $e) {
            return $this->handleError();
        }
        return $customer->user;
    }

    private function saveUserAvatar(User $user, AbstractUser $socialUser)
    {
        $fileContent = file($socialUser->getAvatar());
        $path = (new ImageHandler())->handle($fileContent);
        $user->avatar = $path;
        $user->save();
    }

    public function callback($provider)
    {
        $socialUser = Socialite::driver($provider)->stateless()->user();
        $user = User::where(['email' => $socialUser->getEmail()])->first();
        if ($user) {
            Auth::login($user);
            $this->forgetOrigin();
            return redirect('/');
        } else {
            if (session('originUser') == 'offeror') {
                $user = $this->offerorCreate($socialUser, $provider);

            } elseif (session('originUser') == 'customer') {
                $user = $this->customerCreate($socialUser, $provider);
            } else {
                return $this->handleError(__('messages.should_register_first'));
            }
            Auth::login($user);
            $this->forgetOrigin();
            return redirect('/');
        }
    }

}
