<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function users()
    {
        return view('admin.administrator.users');
    }

    public function roles()
    {
        return view('admin.administrator.roles');
    }

    public function permissions()
    {
        return view('admin.administrator.permissions');
    }

}
