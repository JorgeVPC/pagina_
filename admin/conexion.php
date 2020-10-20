<?php
class DB_con
{
	function __construct()
	{
		$conn = mysqli_connect( "localhost", "root", "","vlcc") or die ("No se ha podido conectar al servidor de Base de datos");
		//mysqli_select_db( $conn, "dbtuts" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	}
	public function login($usuario,$password)
	{
		
			

	}

	public function insert($nombre,$apellido,$nombre_usuario,$password)
	{
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
		$consulta="INSERT INTO usuario VALUES('$nombre','$apellido','$nombre_usuario','$password')";
		$res = mysqli_query($conn, $consulta);
		mysqli_close($conn);
		return $res;
	}
	
	public function delete($id){
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
		$res=mysqli_query($conn, "DELETE a1, a2 FROM users AS a1 INNER JOIN usuario AS a2
WHERE a1.id=a2.ci AND a1.usuario LIKE $id");
		mysqli_close($conn);
		return $res;
	}

	public function update($fname,$lname,$usuario1,$password2){
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
		mysqli_query($conn, "UPDATE usuario SET usuario='$usuario1', password='$password2'");
		$res=mysqli_query($conn, "UPDATE usuario SET nombre='$fname', apellido='$lname'");
		mysqli_close($conn);
		return $res;
	}
	public function hashSSHA($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
	}
	//insertar noticia 
	public function insert_notice($titulo,$descripcion,$contenido,$imagen)
	{
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
		$consulta="INSERT INTO noticia (titulo,descripcion,contenido,imagen) VALUES('$titulo','$descripcion','$contenido','$imagen')";
		$res = mysqli_query($conn, $consulta);
		mysqli_close($conn);
		return $res;
	}
//seleccionar noticia
	public function select_notice()
	{
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
		$res=mysqli_query($conn, "SELECT * FROM noticia");
		mysqli_close($conn);
		return $res;
	}

	public function delete_notice($id){
		$conn = mysqli_connect( "localhost", "root", "","vlcc");
		$res=mysqli_query($conn, "DELETE FROM noticia WHERE id='$id'");
		mysqli_close($conn);
		return $res;
	}

}


?>