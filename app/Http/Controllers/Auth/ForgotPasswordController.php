<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Override sendResetLinkEmail to add custom logic
     */
    public function sendResetLinkEmail(Request $request)
    {
        // Validasi email
        $this->validateEmail($request);

        // Kirimkan email reset link
        $response = Password::sendResetLink($request->only('email'));

        // Debug hasil pengiriman reset link
        dd($response); // Ini akan berhenti dan menampilkan hasil

        // Cek status dan kembalikan hasil
        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('status', trans($response));
        } else {
            return back()->withErrors(
                ['email' => trans($response)]
            );
        }
    }
}
