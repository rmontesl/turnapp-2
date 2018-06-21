<?php

include 'Conexion.php'; 
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion
{
	protected static $cnx;

	private static function getConexion(){
		self::$cnx = Conexion::conectar();
	}

	private static function desconectar(){
		self::$cnx = null;
	}
	/**
	 * Metodo que sirve para validad login
	 * @param object $usuario  
	 * @return boolean 
	 */

	public static function login($usuario)
	{
		$query = "SELECT *
		FROM usuarios WHERE usuario = :usuario AND password = :password ";

		self::getConexion();

		$resultado = self::$cnx->prepare($query);

		$resultado->bindParam(":usuario", $usuario->getUsuario());
		$resultado->bindParam(":password", $usuario->getPassword());

		$resultado->execute(); 

		if ($resultado->rowCount() > 0) {
			$filas = $resultado->fetch();
			if ($filas["usuario"] == $usuario->getUsuario()
				&& $filas["password"] == $usuario->getPassword()) {
				return true;
			}
		}

		return false;
	}
	/**
	 * Metodo que sirve para obtener un usuario 
	 * @param object $usuario  
	 * @return object  
	 */

	public static function getUsuario ($usuario)
	{
		$query = "SELECT id,nombre,usuario,cadena,password,fecha_registro
		FROM usuarios WHERE usuario = :usuario AND password = :password ";

		self::getConexion();

		$resultado = self::$cnx->prepare($query);

		$resultado->bindParam(":usuario", $usuario->getUsuario());
		$resultado->bindParam(":password", $usuario->getPassword());

		$resultado->execute(); 

		$filas = $resultado->fetch();

		$usuario = new Usuario();
		$usuario->setId($filas["id"]);
		$usuario->setNombre($filas["nombre"]);
		$usuario->setUsuario($filas["usuario"]);
		$usuario->setCadena($filas["cadena"]);
		$usuario->setPassword($filas["password"]);
		$usuario->setFecha_registro($filas["fecha_registro"]);






		return $usuario;
	}

}