<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HolaMundo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('HolaMundo');
	}
	/**
	 * [menu description]
	 * @return [type] [description]
	 */
	public function menu(){
		$this->load->helper('url_helper');
		echo anchor("HolaMundo", "Hola ");
<<<<<<< HEAD

		echo anchor("HolaMundo/adios", "Adios sin cambio");

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		echo anchor("HolaMundo/adios", "Adios cambios prueba 4");
=======
>>>>>>> parent of 1c607eb... Update HolaMundo.php
		echo anchor("HolaMundo/adios", "Adios ");
>>>>>>> parent of 61294ac... Prueba 3
=======
		echo anchor("HolaMundo/adios", "Adios ");
>>>>>>> parent of 61294ac... Prueba 3
=======
		echo anchor("HolaMundo/adios", "Adios");
>>>>>>> parent of 1f76781... Cambios 4
		echo anchor("HolaMundo/quetal", "Ir a que tal");

		$this->load->view('Menu');
	}
	/**
	 * [adios description]
	 * @return [type] [description]
	 */
	public function adios()
	{
		$this->load->view('AdiosMundo');
	}

	public function quetal()
	{
		$this->load->view('quetal');
	}
}