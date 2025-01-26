<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteManageController extends Controller
{
    private $pathWay;
    public function __construct(){
        $this->pathWay = 'admin.app';
    }
    public function index(){
        return view($this->pathWay);
    }
    public function login(){
        return view($this->pathWay);
    }
    public function forget(){
        return view($this->pathWay);
    }
    public function reset(){
        return view($this->pathWay);
    }
}
