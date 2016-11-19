<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThiTracNghiem;
class ThiTracNghiemController extends Controller
{
    public function getList(){
    	return ThiTracNghiem::orderBy('id','ASC')->get();
    }
}
