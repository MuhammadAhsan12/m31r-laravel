<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Persons;
use App\Models\Companies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(){
        $userCount = User::count();
        $personCount = Persons::count();
        $companyCount = Companies::count();
        return view('admin.index', compact('userCount', 'personCount', 'companyCount'));
    }
}
