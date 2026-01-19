<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Student;

class StudentAuthController extends Controller
{
   

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_active' => true,
        ]);

        Auth::guard('student')->login($student);
        $request->session()->regenerate();

        return redirect()->back()->with('success', 'Registered Successfully');
    }




    public function login(Request $request)
    {

    $request->validate([
        'email'       => 'required|email',
        'password'    => 'required|min:6',
        'fingerprint' => 'required',
    ]);

    // 1️⃣ Find student
    $student = Student::where('email', $request->email)->first();

    if (!$student) {
        return back()->with('error', 'Invalid email or password')->withInput();
    }

    // 2️⃣ Active check
    if (!$student->is_active) {
        return back()->with('error', 'Your account is inactive')->withInput();
    }

    // 3️⃣ Blocked check
    if ($student->is_blocked) {
        return back()->with('error', 'Your account is blocked. Contact support.');
    }

    // 4️⃣ Password check
    if (!Hash::check($request->password, $student->password)) {
        return back()->with('error', 'Invalid email or password')->withInput();
    }

    // 5️⃣ Device fingerprint logic
    if (is_null($student->device_fingerprint)) {
        // First login → store fingerprint
        $student->update([
            'device_fingerprint' => $request->fingerprint,
            'last_login_at'      => now(),
        ]);
    } elseif ($student->device_fingerprint !== $request->fingerprint) {
        return back()->with(
            'error',
            'This account is already logged in on another device.'
        );
    } else {
        // Same device → update login time
        $student->update([
            'last_login_at' => now(),
        ]);
    }

    // 6️⃣ Login manually
    Auth::guard('student')->login($student);
    $request->session()->regenerate();

    return redirect()->intended(route('student.dashboard'));

    }

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged Out');;
    }


}
