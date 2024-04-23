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

        $name = $request['company_name'];
        $email = $request['email'];
        $address = $request['company_address'];
        $phone = $request['phone'];
        $state = $request['state'];
        $sex = $request['sex'];
        $hearAboutUs = $request['hear_about_us'];

        //send email
        $adminEmail = 'info@kingsburyglobal.com';
        Notification::route('mail', $adminEmail)
        ->notify(new KingsburyAgentRegistrationNotification($name,$email,$address,$phone,$sex,$state,$hearAboutUs));

        return back()->with("msg", "<div class='alert alert-success'>Registration submitted successfully..we will get back to you in 24-48hrs</div>");

    }
}
