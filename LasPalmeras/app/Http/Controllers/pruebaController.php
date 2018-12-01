<?php
namespace palmeras\Http\Controllers;
use palmeras\Http\Controllers\Controller;
class PruebaController extends Controller{
	public function prueba($palabra){
		return 'Estoy en prueba controller y recibi esta palabra '.$palabra;
	}
}
 ?>