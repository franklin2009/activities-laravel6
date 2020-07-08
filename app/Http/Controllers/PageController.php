<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * Control para gestion de paginas: vistas
 * 
 */
 
class PageController
{
	
	/**
	 * Metodo para visualizar la vista del home.
     * @return view
     */
	public function home() {
		return view('home');
	}
	
	/**
	 * Metodo para visualizar la vista del about.
     * @return view
     */
	public function about() {
		$avatar = "https://www.gravatar.com/avatar/" . md5('franklin.archila@gmail.com'). "&s=80";
		return view('about')->with('avatar',$avatar);
	}
	
}
