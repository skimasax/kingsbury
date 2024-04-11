<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentFormRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\KingsburyAgentRegistrationNotification;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function store(Request $request)
    {

        $name = $request['full_name'];
        $email = $request['email'];
        $address = $request['address'];
        $phone = $request['phone'];
        $state = $request['state'];
        $sex = $request['sex'];

        //send email
        $adminEmail = 'kingburyglobal@gmail.com';
        Notification::route('mail', $adminEmail)
        ->notify(new KingsburyAgentRegistrationNotification($name,$email,$address,$phone,$sex,$state));

        return back()->with("msg", "<div class='alert alert-success'>Registration submitted successfully..we will get back to you in 24-48hrs</div>");

    }
}
