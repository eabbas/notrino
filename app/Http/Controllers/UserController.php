<?php
namespace App\Http\Controllers;

use App\Models\order;
use App\Models\role_user;
use App\Models\role;
use App\Models\User;
use App\Models\phone_code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function create()
    {
        return view('client.signup');
    }

    public function store(Request $request)
    {
        if ($request->rules) {
            $phone = User::where('phoneNumber', $request->phoneNumber)->first();
            if ($phone) {
                return redirect()->back()->with('message', 'این شماره تلفن قبلا استفاده شده');
            }
            $password = Hash::make($request->password);
            $user_id = User::insertGetId([
                'name' => $request->name,
                'family' => $request->family,
                'phoneNumber' => $request->phoneNumber,
                'password' => $password,
            ]);
            role_user::create(['role_id' => 2, 'user_id' => $user_id]);
            return to_route('login');
        }
        return to_route('signup');
    }

    public function check(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();

        if ($user) {
            $checkHash = Hash::check($request->password, $user->password);
            if ($checkHash) {
                $user->role;
                Auth::login($user);
                return to_route('user.profile', [$user]);
            }
            return to_route('login');
        }
        return to_route('signup');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    public function panel()
    {
        $user = Auth::user();
        $user->role;

        if (!Auth::check()) {
            return to_route('login');
        }
        return view('admin.app.panel', ['user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();
        $user->role;
        return view('admin.user.profile', ['user' => $user]);
    }

    public function show(user $user)
    {
        return view('admin.user.single', ['user' => $user]);
    }

    public function edit(user $user)
    {
        $roles = role::all();
        return view('admin.user.edit', ['user' => $user, 'roles'=>$roles]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        if(isset($request->role)){
            $role = role_user::where('user_id', $user->id)->delete();
            role_user::create([
                'user_id'=>$user->id,
                'role_id'=>$request->role
            ]);
        }
        $user->name = $request->name;
        $user->family = $request->family;
        if (isset($request->phoneNumber)) {
            $user->phoneNumber = $request->phoneNumber;
        }
        if (isset($request->email)) {
            $user->email = $request->email;
        }

        if ($request->password) {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        if ($request->main_image) {
            if ($user->main_image) {
                Storage::disk('public')->delete($user->main_image);
            }
            $name = $request->main_image->getClientOriginalName();
            $fullName = time() . '_' . $name;
            $path = $request->file('main_image')->storeAs('images', $fullName, 'public');
            $user->main_image = $path;
        }
        $user->save();
        return to_route('user.profile', [Auth::user()]);
    }

    public function delete(user $user)
    {
        
        $user->delete();
        return to_route('user.list');
    }

    public function login()
    {
        return view('client.login');
    }

    public function compelete_form()
    {
        return view('admin.user.compelete_form', ['user' => Auth::user()->role]);
    }

    public function save(Request $request)
    {
        $user = Auth::user();
        $user->role;

        $name = $request->main_image->getClientOriginalName();
        $fullName = time() . '_' . $name;
        $path = $request->file('main_image')->storeAs('images', $fullName, 'public');
        $user->main_image = $path;
        $user->email = $request->email;
        $user->save();
        return to_route('user.profile', [Auth::user()]);
    }

    // public function set_order(Request $request)
    // {
    //     dd($request->all());
    //     foreach ($request->titles as $key => $title) {
    //         order::create([
    //             'career_id' => $request->career,
    //             'slug' => $request->slug,
    //             'title' => $request->title,
    //             'count' => $request->count
    //         ]);
    //     }
    // }

    public function setting()
    {
        return view('admin.user.setting');
    }

    public function checkAuth(Request $request){
       $bool = false;
        $user['validate'] = User::where('phoneNumber', $request->phoneNumber)->first();
        $code = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($code->code == $request->code) {
            $bool = true;
        }
        $user['checkCode'] = $bool;
        return response()->json($user);
    }

    public function create_user(){
        $roles = role::all();
        return view('admin.user.create', ['roles'=>$roles]);
    }

    public function store_user(Request $request){
        $password = Hash::make($request->password);
        $path = null;
        if (isset($request->main_image)) {
            $name = $request->main_image->getClientOriginalName();
            $fullName = time()."_".$name;
            $path = $request->file('main_image')->storeAs('images', $fullName, 'public');
        }
        $user_id = User::insertGetId([
            'name'=>$request->name,
            'family'=>$request->family,
            'phoneNumber'=>$request->phoneNumber,
            'email'=>$request->email,
            'main_image'=>$path,
            'password'=>$password,
        ]);
        role_user::create([
            'user_id'=>$user_id,
            'role_id'=>$request->role
        ]);
        return to_route('user.list');
    }
     public function send_code(Request $request)
    {
        $flag = false;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = true;
        }
        if (!$flag) {
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $request->phoneNumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        return response()->json(["flag" => $flag, "user" => $user]);
    }
    public function removeActivationCode(Request $request)
    {
        $row = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($row) {
            $row->delete();
        }
        return response()->json($row);
    }
    
    public function forget_password()
    {
        return view('client.forgetPassword');
    }
     public function set_password(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        return to_route('reset_password', [$user]);
    }
    
    public function reset_password(User $user)
    {
        return view('client.setPassword', ['user' => $user]);
    }
    public function loginWithActivationCode(Request $request)
    {
        $flag = true;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = false;
        }
        if (!$flag) {
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $request->phoneNumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        return response()->json($flag);
    }
}
