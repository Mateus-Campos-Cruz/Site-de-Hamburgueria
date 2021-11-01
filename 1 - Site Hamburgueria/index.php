<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Burguer M9</title>
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

            <h1>Quem Somos</h1> <br>

            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of 
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
            like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

        </div>

        <hr> <br>

        <div class="mapa">
            <h1>Venha conhecer a nossa loja principal:</h1> <br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.125281524484!2d-43.940817786043624!3d-19.919124786609764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699fb595bab33%3A0xca642ca01121d880!2sPra%C3%A7a%20Sete%20de%20Setembro!5e0!3m2!1spt-BR!2sbr!4v1627606124241!5m2!1spt-BR!2sbr" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="messagem">

        <hr> <br>

        <h1>Contato</h1>
        <h2>Envie uma mensagem</h2><br> <br>

            <span class="formulario">
                <form action="">
                    
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Escreva uma mensagem" ></textarea>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Seu nome" >
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Seu email">
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Seu número de celular">
                        
                        <button type="submit" class="btn btn-success mb-3">Enviar mensagem</button>
                </form>
            </span>           

        </div>
        <footer>&copy Todos os direitos reservados - Mateus Felipe Campos da Cruz</footer>
    </div>
    
</div>
    
</body>
</html>