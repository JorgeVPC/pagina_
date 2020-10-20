<?php
//include_once 'conexion.php';
//$con=new DB_con();
if(isset($_POST['btn-login']))
{
  $su= array();
  $u1 = array();
  $su2= array();
  $p1 = array();
  //$lusuario= $_POST['usuario1'];
	//$lpassword= $_POST['password1'];
  if (ctype_alnum($_POST['usuario1'])) 
  {
      $su['usuario1']=$_POST['usuario1'];
  }
	else {
    //el nombre es invalido 
    echo '<script language="javascript">alert("Usuario con formato no admitido");</script>';
  }
  if (ctype_alnum($_POST['password1'])) 
  {
      $su2['password1']=$_POST['password1'];
  }
	else {
    //la contraseña es invalida 
    echo '<script language="javascript">alert("Contraseña con formato no admitido");</script>';
  }
  $conn = mysqli_connect( "localhost", "root", "","vlcc");
  $u1['usuario1']= strip_tags(mysqli_real_escape_string($conn,trim($su['usuario1'])));
  $p1['password1']= strip_tags(mysqli_real_escape_string($conn,trim($su2['password1'])));

		$consulta= "SELECT * FROM usuario where nombre_usuario = '".$u1['usuario1']."'";
		$res = mysqli_query($conn, $consulta);
		if (mysqli_num_rows($res)>0) 
		{
      echo "Mailer Error: ";
			$array = mysqli_fetch_array($res);
			$password_hash = $array['password'];

			if (password_verify($p1['password1'],$password_hash)) 
			{
				?>
		    <script>
		      alert('Bienvenido...');
           window.location='panel.php'
        </script>
		    <?php
      }
      else {
        ?>		
        <script>
        alert('Error Vuelva a ingresar...');
            </script>
    
        <?php
      }
		}	
  
  
  /*$res=$con->login($u1['usuario1'],$p1['password1']);
	if($res>0)
	{
		?>
		<script>
		alert('Bienvenido...');
        window.location='panel.php'
        </script>
		<?php
	}
	else
	{
	
  }*/
  

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrador</title>
  <link  rel="icon" href="img/admin.png" type="image/png" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">ADMINISTRADOR</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                    <input type="text" name="usuario1" class="form-control form-control-user" aria-describedby="emailHelp" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Ingrese Usuario...">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password1" class="form-control form-control-user" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Ingrese contraseña...">
                    </div>
                    <button type="submit" name="btn-login" class="btn btn-primary btn-block btn-flat">Acceder</button>
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
