<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
  <li style="float:right"><a class="active" href="login.html">login</a></li>
</ul>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Utilitários</a>
    <a href="#">Passeios</a>
    <a href="#">Esportivos</a>
    <a href="#">Outros</a>
  </div>

  <div class="main">
    <h1>Vitrine Virtual</h1>
    <h2>Venha para a nossa locadora, aqui nós temos os melhores carros para alugar, pelo melhor preço!!</h2>

    <div class="row row-cols-1 row-cols-md-3">
        <?php $conn=mysqli_connect("localhost", "root", "","carrinho");     
        $sql = "SELECT * FROM produtos";
        $qr = mysqli_query($conn,$sql) or die(mysqli_error()); 


        while($ln = mysqli_fetch_assoc($qr)){ ?>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="<?php echo 'img/'.$ln['imagem']; ?> " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo '<h2>'.$ln['nome'].'</h2> <br />';?></h5>
                <p class="card-text"><?php echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'<br />';?></p>
                <a href="carrinho.php?acao=add&id=<?php echo $ln['id']; ?>"class="btn btn-primary">Locar</a>
              </div>
            </div>
          </div>
          <?php } 
          echo '<br /><hr />';?>
    </div>
  </div>

    <div class="right">
    <h2>Promoções</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
    </div>
 </div>
</div>
<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright from Gustavo Gabriel de Oliveira Lima</div>

</body>
</html>

