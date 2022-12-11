<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected string $Tittle="Laravel Admin panel";
    public function home()
    {
        $tittle=$this->Tittle." Home";
        return view("admin.pages.home",compact("tittle"));
    }
    public function blank()
    {
        $tittle=$this->Tittle." Boş Sayfa";
        return view("admin.pages.blank",compact("tittle"));
    }

    public function login()
    {
       $tittle=$this->Tittle." Login";
        return view("admin.pages.login",compact("tittle"));
    }
}
