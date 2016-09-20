<?php

namespace App\Http\Controllers\Auth;

use App\Models\AccessToken;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @param null $provider
     * @return mixed
     */
    public function redirectToProvider($provider = null)
    {
        if (!config("services.$provider")) {
            abort('404');
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @param null $provider
     * @return Response
     */
    public function handleProviderCallback($provider = null)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect('404');
        }

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $userSocial
     * @param $provider
     * @return User
     * @internal param $facebookUser
     */
    private function findOrCreateUser($userSocial, $provider)
    {
        $authUser = User::where($provider . '_id', $userSocial->id)->first();
        $emailUser = User::where($provider . '_id', $userSocial->email)->first();

        if ($authUser) {
            return $authUser;
        }

        // exception user login social duplicate email.
        if ($emailUser) {
            if ($provider == 'facebook') {

            } elseif ($provider == 'google') {

            }
            // message error redirect login.
        }

        $user = new User();
        $user->name = $userSocial->name;
        $user->email = $userSocial->email;
        ($provider == 'facebook') ? $user->facebook_id = $userSocial->id : $user->google_id = $userSocial->id;
        $user->avatar = $userSocial->avatar;
        $user->save();

        $accessToken = new AccessToken();
        $accessToken->user_id = $user->id;
        ($provider == 'facebook') ? $accessToken->facebook_token = $userSocial->token : $accessToken->google_token = $userSocial->token;
        $accessToken->save();

        return $user;

    }

    public function logout()
    {
        if (!Auth::check()) return redirect('404');
        Auth::logout();
        return redirect('/');
    }
}
