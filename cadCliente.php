<?php
  include_once "./backs/conexao/Conexao.php";
  include_once "./backs/dao/ClienteDAO.php";
  include_once "./backs/model/Cliente.php";

  //instancia as classes
  $cliente = new Cliente();
  $clientedao = new ClienteDAO();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shamá</title>
	<meta charset="UTF-8">
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
				<!--<form class="login100-form validate-form">-->
					<span class="login100-form-title p-b-49">
						Cadastrar-se
					</span>

					<div class="formulario">  
					<form action="./backs/controller/ClienteController.php" method="POST" class="row g-3">  

					<div class="wrap-input100 validate-input " data-validate = "Username is required">   
						<span for="nome" class="form-label label-input100">Nome</span>
						<input class="input100" type="text" id="nome" name="nome" required placeholder="Digite seu nome">
					</div>

					<fieldset class="wrap-input100 validate-input " data-validate = "tipo is required">
						<legend class="label-input100">Tipo de Pessoa</legend>
						
						<div class="col-sm-10">
						<div class="form-check">
						<input class="form-check-input" type="radio" name="tp" id="tp" value="0" checked>
						<label class="form-check-label" for="tp">
							Pessoa Física
						</label>
						</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="tp" id="tp" value="1">
						<label class="form-check-label" for="tp">
							Pessoa Jurídica
						</label>
						</div>
						</div>
						
						<span for="cpf" class="form-label">
						<input type="text" class="input100" id="CPF" name="cpf" required maxlength="11" placeholder="Digite seu CPF/CNPJ">
					</fieldset>
					
					<div  class="wrap-input100 validate-input " data-validate = "E-mail is reauired">
						<span for="email" class="form-label label-input100">E-mail</span>
						<input type="email" class="input100" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
						title="preencha o email corretamente ex: email@email.com"
						required placeholder="Digite seu E-mail">
					</div>

					<div  class="wrap-input100 validate-input " data-validate = "Telefone is required">
						<span for="telefone" class="form-label label-input100">Telefone</label>
						<input type="text" class="input100" id="telefone" name="telefone" required maxlength="11"
						placeholder="(xx)xxxxx-xxxx">
					</div>

					<div  class="wrap-input100 validate-input " data-validate = "Senha is required">
						<span for="senha" class="form-label label-input100">Senha</span>
						<input type="password" class="input100" id="senha" name="senha" required maxlength="20"
						pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
						title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres"
						placeholder="Crie sua senha">
					</div>
					
					
					<div  class="wrap-input100 validate-input " data-validate = "CEP is required">
						<span for="cep" class="form-label label-input100">Digite seu CEP</span>
						<input type="text" class="input100" id="cep" name="cep" required maxlength="8"  placeholder="xxxxx-xxx" >
					</div>

					
					<div class="container-login100-form-btn ">
						<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
						</div>
					</div>
						
					<div class="text-right p-t-32 p-b-31"></div>

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