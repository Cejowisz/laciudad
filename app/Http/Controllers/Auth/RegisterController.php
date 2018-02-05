<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'email_token' => bcrypt($data['email']),
            'password' => 'required|min:6|confirmed',
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        //dispatch(new SendVerificationEmail($user));
        return response()->json([
            'message' => $request->all()
        ]);
    }


    protected function create(array $data)
    {

        $user =  User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'email_token' => bcrypt($data['email']),
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }

    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();

        if($user){
            $user->status = true;
            $user->save();
            return view('emails.users.confirmed',['user'=>$user]);

        }else{
            Session::flash('message', 'The link is invalid');
            return redirect()>route('index');
        }

    }
}
