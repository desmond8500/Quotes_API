<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BootstrapThemeController extends Controller
{
    public $config_file = 'BootsrtapTheme/comfig/app.json';

    public function index(){

    }

    public function init_module(){
        $config = (object) array(
            "appname" => "App name",
            "index_route" => "/"
        );

        Storage::disk('public')->put($this->config_file, json_encode($config));

        return redirect()->back();
    }
}
