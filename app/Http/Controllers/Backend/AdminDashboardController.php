<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

  public function adminDashboard()
  {
    return "welcome to dashboard";
  }
}
