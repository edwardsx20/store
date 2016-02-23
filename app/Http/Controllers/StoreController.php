<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
	public function __construct(){
		//TODO: Add AUTH filter
		//$this->middleware('auth');
	}

	public function index(){
		$products = $this->getProducts();
        
        return view('pages.index', compact('products'));
	}

	public static function getProducts(){
		return $products = DB::table('libros_colegios')
			->leftJoin('libro', 'libro.id', '=', 'libros_colegios.libro_id')
			->select('libro.id', 'libro.precio', 'libro.proyecto', 'libro.asignatura', 'libro.portada', 'libro.nivel')
			->get();
	}
}
