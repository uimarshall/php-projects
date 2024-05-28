<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CheckoutController extends Controller
{
  public function __construct()
  {
  }
  /**
   * Display the user's profile form.
   */
  public function index(): View
  {
    return view('checkout.step-1');
  }
  public function step2(): View
  {
    return view('checkout.step-2');
  }
}
