<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Carrinho de compras</title>   
</head>
<body style="font-family:Verdana;color:#000000;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1> Locadora dos irmãos Grayson</h1>
</div>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">Locação</a></li>
  <li><a href="cadastrocliente.html">Cadastro de clientes</a></li>
  <li><a href="cadastrofuncionario.html">Cadastro de funcionários</a></li>
  <li><a href="cadastroveiculo.html">Cadastro de veículos</a></li>
  <li style="float:right"><a class="active" href="#about">login</a></li>
</ul>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Utilitários</a>
    <a href="#">Passeios</a>
    <a href="#">Esportivos</a>
    <a href="#">Outros</a>
  </div>

  <div class="main">
    <h2>Vitrine Virtual</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

    <?php
          $conn=mysqli_connect("localhost", "root", "","carrinho");
                   
          $sql = "SELECT * FROM produtos";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '<h2>'.$ln['nome'].'</h2> <br />';
             echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'<br />';
             echo '<img src="img/'.$ln['imagem'].'" /> <br />';
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
             echo '<br /><hr />';
          }
    ?>
  </div>

  <div class="right">
    <h2>Promoções</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright from Gustavo Gabriel de Oliveira Lima</div>

</body>
</html>

