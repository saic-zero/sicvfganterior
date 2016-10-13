<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
           return view('index');
      }

      public function w(){
           return view('welcome');
      }

      public function reviews(){
           return view('reviews');
      }

      public function admin(){
           return view('admin.administrador');
      }


   }
