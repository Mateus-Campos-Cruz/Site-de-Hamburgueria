<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Burguer M9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-fluid">

    <div class="topo">  
        <div class="logo"><img src="img/logo.png" alt=""></div>
        <div id="titulo"><img src="img/logo3.png" alt=""></div>
    </div>

        <table class="table">
        <thead>
            <tr class="table-success"> 
            <th scope="col"><a href="index.php">Sobre nós</a></th>
            <th scope="col"><a href="cardapio.php">Cardápio</a></th>
            <th scope="col"><a href="restaurantes.php">Restaurantes</a></th>
            <th scope="col"><a href="redes.php">Redes Sociais</a></th>     
            </tr>
        </thead>
        </table>

    <div class="corpo">
    <br>
        <div class="sobre">

        <h1>Cardápio</h1> <br> <br> <br>

       <hr> <br> <br>

        <div class="burg">

        <h2>M9 Burguer Bacon Cheddar</h2> <br>
        <img src="img/burg1.jpg" alt=""> 
        <div class="descricao">
        <h3>Descrição:</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        </p>
        </div>            
        </div>

            <div id="btn-pedir">

                <form action="pedidos.php">
                    <button type="submit" class="btn btn-success mb-3">Quero Pedir!</button>
                </form>

            </div>
        

        <br> <br>  <hr> <br> <br>

        <div class="burg">

        <h2>M9 Burguer Picanha Duplo</h2> <br>
        <img src="img/burg2.jpg" alt=""> 
        <div class="descricao">
        <h3>Descrição:</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        </p>
        </div>

        </div>

            <div id="btn-pedir">

                <form action="pedidos.php">
                    <button type="submit" class="btn btn-success mb-3">Quero Pedir!</button>
                </form>

            </div>

        <br> <br>  <hr> <br> <br>

        <div class="burg">

        <h2>M9 Burguer Artesanal Salada</h2> <br>
        <img src="img/burg3.jpg" alt=""> 

        <div class="descricao">
        <h3>Descrição:</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        </p>
        </div>

        </div>

        <div id="btn-pedir">

                <form action="pedidos.php">
                    <button type="submit" class="btn btn-success mb-3">Quero Pedir!</button>
                </form>

            </div>

        </div>
    

    
        <footer>&copy Todos os direitos reservados - Mateus Felipe Campos da Cruz</footer>
    </div>
    
</div>
    
</body>
</html>