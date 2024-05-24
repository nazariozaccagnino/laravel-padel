<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class FieldsController extends Controller
{
    public function index(){
    $fields= Field::all();
    return view('home', compact('fields'));
    }
}
