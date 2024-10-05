<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Order\BaseController;
use App\Models\Contractor;
use App\Models\Order;

class WelcomeController extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
}
