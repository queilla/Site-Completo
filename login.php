<?php
session_start();
include "./backs/conexao/Conexao.php";
 if(isset($_POST['logar'])){  
                    
            
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = mysqli_query($conn,"SELECT idCliente,nomeCliente,emailCliente,senha
             FROM cliente WHERE emailCliente='$email' AND senha='$senha' ");
            
            

            if ( $linha = mysqli_fetch_array( $sql ) ) {
                $emailCli = $linha['emailCliente'];
                $senhaCli = $linha['senha'];
                $nomeCli = $linha['nomeCliente'];
                $idCli = $linha['idCliente'];

                $_SESSION['email'] = $emailCli;
                $_SESSION['senha'] = $senhaCli;
                $_SESSION['nome'] = $nomeCli;
                $_SESSION['id'] = $idCli;
                
                
                echo "<script>
                alert('Bem-vindo $nomeCli')
                location.href='compras.php'
            </script>";

            }
            else{
                echo "<script>
                alert('erro ao logar')
                location.href='../../index.php'
            </script>";  
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shamá</title>
	<meta charset="UTF-8">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" placeholder="Digite seu email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="pass" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Esqueceu a senha?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>


					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Ou cadastre-se usando
						</span>

						<a href="cadCliente.php" class="txt2">
							cadastrar-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

