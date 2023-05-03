<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminLanguageController extends Controller
{
    public function adminswitchLang($lang)
    {
        if (array_key_exists($lang, Config::get('core.base.admin_languages'))) {
            App::setLocale($lang);
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
