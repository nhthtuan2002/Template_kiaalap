<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product/form');
    }
    public function store(){}
    public function list(){}
    public function upload(){}
    public function save(){}
    public function delete(){}
}
