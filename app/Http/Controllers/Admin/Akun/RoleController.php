<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Http\Controllers\Controller;
use App\Models\Admin\Akun\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data["role"] = Role::orderBy("nama", "ASC")->get();

        return view("admin.akun.role.index", $data);
    }
}
