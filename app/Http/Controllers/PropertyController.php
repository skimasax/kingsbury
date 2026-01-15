<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\PropertyEnquiry;
use App\Notifications\KingsburyAgentRegistrationNotification;
use App\Notifications\PropertyEnquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PropertyController extends Controller
{
    // Modern Views
    public function modernHome()
    {
        $data = Property::inRandomOrder()->get();
        return view('modern-index')->with(['data' => $data]);
    }

    public function modernIndex()
    {
        $data = Property::where('type','house')->inRandomOrder()->get();
        return view('modern-property-grid')->with(['data' => $data]);
    }

    public function modernLand()
    {
        $data = Property::where('type','land')->inRandomOrder()->get();
        return view('modern-property-grid')->with(['data' => $data]);
    }

    public function modernShow($id)
    {
        $data = Property::find($id);
        return view('modern-singleproperty')->with(['data' => $data]);
    }

    // Legacy Views (for backward compatibility)
    public function home()
    {
        $data = Property::inRandomOrder()->get();
        return view('index')->with(['data' => $data]);
    }

    public function index()
    {
        $data = Property::where('type','house')->inRandomOrder()->get();
        return view('property-grid')->with(['data' => $data]);
    }

    public function land()
    {
        $data = Property::where('type','land')->inRandomOrder()->get();
        return view('property-grid')->with(['data' => $data]);
    }

    public function show($id)
    {
        $data = Property::find($id);
        return view('singleproperty')->with(['data' => $data]);
    }

    public function store(PropertyRequest $request)
    {
        $attributes = $request->validated();

        //get the property name
        $property = Property::find($attributes['property_id']);

        PropertyEnquiry::create([
            'property_name' => $property->property_name,
            'customer_name' => $attributes['customer_name'],
            'contact' => $attributes['contact'],
            'message' => $attributes['message'],
        ]);

        $adminEmail = 'info@kingsburyglobal.com';
        $name = $attributes['customer_name'];
        $property = $property->property_name;
        $contact = $attributes['contact'];
        $message = $attributes['message'];

        // Notification::route('mail', $adminEmail)
        // ->notify(new PropertyEnquiryNotification($name,$contact,$message,$property));

        return back()->with("msg", "<div class='alert alert-success'>Enquiry submitted successfully..we will get back to you in 24-48hrs</div>");

        //get the name of the property

    }
   
}
