<?php

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\BackEnd\Store;

class Home extends Controller
{
    public function index(Store $request)
    {
        return view(getModuleNamespace(__NAMESPACE__) . '::backend.index');
    }
}
