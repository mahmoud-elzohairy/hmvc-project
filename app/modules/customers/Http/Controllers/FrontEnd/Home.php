<?php

namespace Customers\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view(getModuleNamespace(__NAMESPACE__) . '::frontend.index');
    }
}
