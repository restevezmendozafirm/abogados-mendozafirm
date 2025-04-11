<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            // Obtenemos la dirección de correo del usuario
            $email = $request->input('email');

            // Enviamos el correo utilizando la dirección obtenida
            Mail::to($email)->send(new ResetPassword($response));

            return $this->sendResetLinkResponse($response);
        } else {
            return $this->sendResetLinkFailedResponse($request, $response);
        }
    }

    protected function sendResetLinkResponse($response)
    {
        return back()->with('status', trans($response));
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()->withErrors(
            ['email' => trans($response)]
        );
    }

    protected function broker()
    {
        return Password::broker();
    }
}
