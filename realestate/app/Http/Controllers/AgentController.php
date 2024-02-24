<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    Public function AgentDashboard(){
        return view('agent.agent_dashboard');
    }
}