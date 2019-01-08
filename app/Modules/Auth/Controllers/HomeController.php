<?php
namespace App\Modules\Auth\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Validator,Config;
class HomeController extends Controller
{
    /**
     * @DateOfCreation         07 Jan 2019
     * @ShortDescription       Load the login view for admin
     * @return                 View
     */
    public function index()
    {
        return view("Auth::home");
    }

}
