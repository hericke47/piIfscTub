<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

html {
	background-color: #56baed;
  }
  
  body {
	font-family: "Poppins", sans-serif;
	height: 100vh;
  }
  
  a {
	color: #92badd;
	display:inline-block;
	text-decoration: none;
	font-weight: 400;
  }
  
  h2 {
	text-align: center;
	font-size: 16px;
	font-weight: 600;
	text-transform: uppercase;
	display:inline-block;
	margin: 40px 8px 10px 8px; 
	color: #cccccc;
  }
  
  .botao{
	  margin-top: 20px;
	  margin-bottom: 20px;
  }
  .conteudo {
	display: flex;
	align-items: center;
	flex-direction: column; 
	justify-content: center;
	width: 100%;
	min-height: 100%;
	padding: 20px;
  }
  
  #formConteudo {
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	background: #fff;
	padding: 30px;
	width: 90%;
	max-width: 600px;
	position: relative;
	padding: 0px;
	-webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	text-align: center;
  }
  
  #formRodape {
	background-color: #f6f6f6;
	border-top: 1px solid #dce8f1;
	padding: 25px;
	text-align: center;
	border-radius: 0 0 10px 10px;
  }
  
  
  input[type=button], button, input[type=reset]  {
	background-color: #56baed;
	border: none;
	color: white;
	padding: 15px 80px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	text-transform: uppercase;
	font-size: 13px;
	border-radius: 30px;
	
  }
  
  input[type=button]:hover, button , input[type=reset]:hover  {
	background-color: #39ace7;
  }
  
  input[type=text],  input[type=password] {
	background-color: #f6f6f6;
	border: none;
	color: #0d0d0d;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 5px;
	width: 85%;
	border: 2px solid #f6f6f6;
	
  }
  
  input[type=text]:focus, input[type=password]:focus {
	background-color: #fff;
	border-bottom: 2px solid #5fbae9;
  }
  
    </style>
</head>
<body class="my-login-page">
    <div class="conteudo">
        <div id="formConteudo">
      
          <div> 
            <h3>Login</h3>
          </div>
      
        <form action="{{ route('admin.login.do') }}" method="post">
            @csrf
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <input type="text" id="email" name="email"  placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="senha" required>
            <button type="submit" class="botao">Login</button>
          </form>
      
          
          <div id="formRodape">
          </div>
      
        </div>
      </div>

    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>


    
</body>
</html>