<?php
namespace Mage2\Framework\System\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Mage2\Dashboard\Models\Configuration;

class ApiController extends BaseController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;
}
