<?php

namespace App\Http\Controllers;

use App\Services\ProcessusComponent;
use Illuminate\Http\Request;

class ProcessusController extends Controller
{
    public function getAllProcess(ProcessusComponent $process)
    {
        $processus = $process->getItemsOfProcessus();
        return view('pages.processus', compact('processus'));
    }
}
