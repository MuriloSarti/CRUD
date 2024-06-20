<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="lampada.png" type="image/x-icon">
    <title>Tela de Escolha</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, black, white);
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: white;
            color: black;
            border: 3px solid black
        }

        .ini {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            position: relative;
            top: 250px;
            padding: 10px;
        }

        .h {
            padding: 20px;
        }
    </style>
</head>

<body>
    
    <h3 class="ini" > Olá seja bem vindo, você esta no CRUD do Murilo, aproveite até o final. </h3>
    <br>
    <br>
    <div class="box">
            <h4 class="h">Aqui você deve selecionar se quer fazer login, ou caso ainda não tenha login cadastrar-se</h4>
        <a href="index.php">Login</a>   
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>