<?php

namespace App\Http\Controllers\Back;


use App\Models\User;
use App\Models\UserCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Helpers\RoleManager;
use App\Helpers\UserManager;


class UserController extends Controller
{
    protected $roleManager;
    protected $userManager;
    public function __construct(RoleManager $roleManager, UserManager $userManager)
    {
        $this->roleManager = $roleManager;
        $this->userManager = $userManager;
    }

   public function user_index(){
    return view('admin.user.index');
   }

 
public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);


 
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
    {
       toastr()->success('Giris Edildi');
       return redirect()->route('admin.index');
    }
    else{
       toastr()->error('Parametrleri duzgun yoxlayin');
    return redirect()->back();
    }

}


   public function register(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'name' => 'required',
           'email' => 'email|required',
           'password' => 'required|min:8',
           'confirm_password' => 'required|min:8|same:password',
       ]);


       if ($validator->fails()) {
           toastr()->error('Lütfən bütün məlumatları düzgün formatda daxil edin!');
           return redirect()->back();
       }

       if (User::all()->firstWhere('email', $request->email)) {
           toastr()->error('Bu istifadəçi artıq mövcuddur');
           return redirect()->back();
       }

       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);
       $code = rand(1000, 9999);
       $data = $request->all();
       $data['code'] = $code;

       $user->roles()->attach(2);
       
       return view('admin.pages.index');
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('admin.login');
   }

   public function admin_edit_all(Request $request)
   {
       $id = auth()->guard('admin')->id();
       $data = User::find($id);
       $data->name = $request->name;
       $data->email = $request->email;

       if ($request->file('image')) {
           $file = $request->file('image');
           @unlink(public_path('/upload/admin_images/') . $data->image);
           $filename = date('YmdHi') . $file->getClientOriginalName();
           $file->move(public_path('/upload/admin_images'), $filename);
           $data['image'] = $filename;
       }

       $data->save();
       toastr()->success('Parametrler ugurla deyisdirildi');
       return redirect()->back();
   }


   public function admin_edit_password(Request $request)
   {

       $id = auth()->guard('admin')->id();

       $hashedpassword = User::find($id)->password;

       if (Hash::check($request->oldpassword, $hashedpassword)) {
           $admin = User::find($id);
           $admin->password = Hash::make($request->password);
           $admin->save();
           Auth::logout();
           toastr()->success('Sifre ugurla deyisdirildi');
           return redirect()->route('admin.login');
       } else {
           toastr()->error('Something went wrong');
           return redirect()->back();
       }
   }


   public function users()
   {
    $admins = User::where('admin_active', 1)->get();
       return view('admin.user.index')
           ->with('users', $admins);
   }

   public function add_role($id)
   {
       $user = User::all()->find($id);
       $this->userManager->addRole($user, 'SuperAdmin');
       return redirect()->back();
   }

   public function delete_user($id)
   {
       $user = User::all()->find($id);
        $user->delete();
        return redirect()->back();
   }

   public function create_role()
   {
       $this->roleManager->createRole('SuperAdmin');
       $this->roleManager->createRole('Admin');
   }

  


}
