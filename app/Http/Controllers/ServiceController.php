<?php

namespace App\Http\Controllers;

use App\Services\ServicesComponent;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function items(ServicesComponent $items)
    {
        $services = $items->getItemsOfServices();
        return view("pages.services", compact("services"));
    }
}
