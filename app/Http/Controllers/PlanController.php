<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index() 
    {
        $plans = Plan::get();
        return view("/welcome", compact("plans"));
    }

    public function show(Plan $plan, Request $request) 
    {
        $intent = auth()->user()->createSetupIntent();
        return view("subscription", compact("plan", "intent"));
    }
}
