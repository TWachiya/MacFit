<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\Role;
use App\Models\User;
use App\Models\UserOtp;
use App\Notifications\VerifyEmailNotification;
//
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register (Request $request){
        $validatedData = $request->validate([
            'name'=>'required|string|max:40',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:8|max:15',
            'user_image'=>'nullable|image|max:255|mimes:jpeg,png,jpg',
            'role_id'=>'required|integer|exists:roles,id',
            'phoneNumber'=>'nullable|string',
            'gender'=>'nullable|string',
            'dob'=>'nullable|string',
            'gymLocation'=>'nullable|string',
        ]);

        if($request->has('role_id')){
            $role_id=$request->role_id;
            
        } else{
            $role= Role::where('name','User')->first();
            $role_id = $role->id;
        }
        
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role_id = $role_id;
        $user->phoneNumber = $validatedData['phoneNumber'];
        $user->gymLocation = $validatedData['gymLocation'];
        $user->gender = $validatedData['gender'];
        $user->dob = $validatedData['dob'];

        $user->is_active = true;

        if($request->hasFile('user_image')){
            $filename =$request->file('user_image')->store('users', 'public');
            
        } else{
            $filename =null;
        }
        $user->user_image = $filename;

        try{
            $user->save();
            
            //$signedUrl = URL::temporarySignedRoute(
             //   'verification.verify',
               // now()->addMinutes(60),
               // ['id' => $user->id, 'hash' => sha1($user->getEmailForVerification())]
            //);

            // $user->notify(new VerifyEmailNotification($signedUrl));
            // return response()->json($user);

        $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Registration successful',
                'token' => $token,
                'user' => $user,
                'abilities' => $user->abilities(),
            ], 200);    
        }
        catch(\Exception $exception){
            return response()->json([
                'error'=>"Registration Failed",
                'message'=>$exception->getMessage()
            ]);
        }
}

    public function login(Request $request){
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string|min:4'
        ]);

        $user = User::where('email', $validated['email'])->first();

        if(!$user || !Hash::check($validated['password'], $user->password))
        throw ValidationException::withMessages(['error'=>'Invalid Credentials'], 401);

        if(!$user->is_active){
            return response()->json([
                'message'=>'Your account is not Active. Please verify your Email Adress'
            ], 403);
            
        }

        // $otp = rand(100000, 999999);
        // $expiresAt = now()->addMinutes(5);

        //     UserOtp::updateOrCreate([
        //         'user_id' => $user->id,
        //         'otp' => $otp, 
        //         'expires_at' => $expiresAt
        //     ]);

        //     Mail::to($user->email)->send(new OtpMail($otp));

        // return response()->json([
        //     'message'=>'OTP sent to your email. Please verify to complete login.',
        // ], 201);

            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Registration successful',
                'token' => $token,
                'user' => $user,
                'abilities' => $user->abilities(),
            ], 200);    

}

public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json('Logout Successful.');
}
} 