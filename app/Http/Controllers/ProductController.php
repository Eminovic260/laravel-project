<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        return "Fiche du produit";
    }

    public function details($id)
    {
        return "Fiche du produit $id";
    }
}
