<?php

namespace App\Http\Controllers;

use App\Mail\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserSendController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $send = User::findOrFail($request->id);
        Mail::to($request->user())->send(new UserRequest($send));
        return redirect('/dashboard');

    }
}
