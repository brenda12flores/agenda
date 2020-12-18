<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Bienvenido');
	}

	//--------------------------------------------------------------------

	public function vistaContactos(){
		$Crud = new categoriasModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('Contactos');
	}


	


	public function editarVistaContactos(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$idContacto =  $_POST['idContacto'];

		$Crud = new contactosModel();

		$respuesta = $Crud->actualizarContacto($datos, $idContacto);

		if ($respuesta){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','3');
		}
	}


	public function editarVistaCategorias(){
		return view('editarCategoria');
	}

	public function eliminar($idCategoria){
		$Crud = new categoriasModel();
		$data = ["id_categoria" => $idCategoria];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','5');
		}
	}

	public function eliminarContacto($idContacto){
		$Crud = new contactosModel();
		$data = ["id_contacto" => $idContacto];

		$respuesta = $Crud->eliminarContacto($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','5');
		}


	public function crear(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new categoriasModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','0');
		}

	}

	public function actualizar(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$idCategoria =  $_POST['idCategoria'];

		$Crud = new categoriasModel();

		$respuesta = $Crud->actualizar($datos, $idCategoria);

		if ($respuesta){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','3');
		}
	}

	public function crearcont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'], 
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new contactosModel();
		$respuesta = $Crud->insertarContacto($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','0');
		}

	}

	public function vistaCategorias(){
		
		
		return view('Categoria');
	}

}
