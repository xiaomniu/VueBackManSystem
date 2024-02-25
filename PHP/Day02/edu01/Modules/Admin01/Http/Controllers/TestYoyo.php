<?php

namespace Modules\Admin01\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestYoyo extends Controller
{
    public function testApi(){
        return 'yoyo testApi';
    }
}
