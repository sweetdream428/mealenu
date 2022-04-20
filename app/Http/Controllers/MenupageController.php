<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Exception;


class MenupageController extends Controller
{

    public function index()
    {
        return view('menupage.index');
    }
    public function createpage($pagename){
        try{
            $page = new Page;
            $page->name = $pagename;
            $page->save();
        }
        catch(Exception $e){

        }
    }
    
}