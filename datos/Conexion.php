<?php

class Conexion{

	/**
	 * Conexión a la base de datos
	 * @return Conexion
	 */

	public static function conectar(){

		try {

			$cn = new PDO("mysql:host=localhost;dbname=login","rmontesl","Rm.3006181228");

			return $cn;

		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}
}
