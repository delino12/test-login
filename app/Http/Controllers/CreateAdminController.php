<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class CreateAdminController extends Controller
{
    //
    public function createAdmin(Admin $admin)
    {
    	$admin_name = "Dragon Glass";
    	$admin_email = "dragonglass@hng.fun";
    	$admin_password = "whitewalker";
    	$admin_level = "omega";

    	$admin = new Admin;
		$admin->name = $admin_name;
		$admin->email = $admin_email;
		$admin->password = bcrypt($admin_password);
		$admin->level = $admin_level;
		$admin->save();
		

		return "1 Admin created succesfully";
    }
}
