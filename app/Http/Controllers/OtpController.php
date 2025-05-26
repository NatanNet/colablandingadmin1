<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $otp = rand(100000, 999999);

        //kirim email

        Mail::to($request->email)->send(new OtpMail($otp));

        //simpan ke database?

        return response()->json([
            'message' => 'OTP berhasil dikirm ke email',
            'otp' => $otp //tampilan untuk testing
        ]);
    }
}
