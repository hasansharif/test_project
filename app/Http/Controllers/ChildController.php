<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ChildController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $data['fname'] = "Hassan";
        $data['lname'] = "Sharif";
        $data['cell_no'] = "0321-1019001";
        $data['adress'] = "804 A-Block Subzazar Scheme Multan Road Lahore";
        return View('child',$data);
    }
}
?>