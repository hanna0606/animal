<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nós amamos animais </title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-danger text-white" data-bs-theme="dark">
    <div class="container-fluid">
     <i class="bi bi-heart-fill"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
</svg> <br>
      <a class="navbar-brand  text-white" href="#">Nós amamos os animais </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon  text-white "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  text-white" href="./index.html">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="./castração.html">Castração</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="./contato.html"> Contato </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="./animais.html">Animais</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<center> <h1>Cadastro do Adotante </h1>
  <div class= "container">
  <form class="form- signin" id="cadastro" onevent="tratarFormulario()">
      <form action="file.php" method="post">
          
          <label for="nome">Nome:</label><br>
          <input  type="text" id="nome" name="nome" placeholder="Olivia de souza" required><br><br>
          
          <label for="nascimento">Nascimento:</label><br>
          <input type="text"  id="nascimento" name="nascimento"  placeholder="25/09/2000" required><br><br>
  
          <label for="CPF">CPF:</label><br>
          <input type="text" id="CPF" name="CPF"  placeholder="000.000.000-00" required><br><br>
          
          <label for="sexo">Sexo</label><br>
                   <select name="sexo">
                      <br>
                      <option value="masculino">Masculino</option>
                      <option value="masculino">Feminino</option>
                   </select>
                   <br></br>
               
          <label for="email">Email:</label><br>
          <input  type="text"  id="email" name="email" placeholder="batata@gmail.com" required><br><br>
          
          <label for="numero">Número:</label><br>
          <input  type="text"  id="numero" name="numero" placeholder="55 45988090" required><br><br>
  
          <label for="estado">Estado:</label><br>
          <input  type="text" id="estado" name="estado"placeholder="Paraná" required><br><br>
          
          <label for="cidade">Cidade:</label><br>
          <input type="text" id="cidade" name="cidade"placeholder="Foz do iguaçu" required  ><br><br>
  
          <button class="btn btn-dark" type="button" onclick="tratarFormulario(event)" > Cadastra </button>

          </center>

  </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- 
  <script>
    function tratarFormulario(event){
    
    	console.log(event);
    	alert("Chegamos aonde queriamos!");
    
    }
    </script>-->
    <br> 
</body>
  </html>



<!--
<center>
  <div class="jumbotron">
    <h6 class="display-4">A compaixão pelos animais está intimamente ligada a bondade de caráter, e quem é cruel com os animais não pode ser um bom homem.</h6>
    <p class="lead">Faça seu formúlario para adquirir um animalzinho </p>
    
  </center>


<body>
   <div class= "container">
<form class="form- signin" id="cadastro" onevent="tratarFormulario()">

  <div class="form-label-group">
  <input type="text" id="inputId" class="form-control" disabled>
</div>

  <div class="form-label-group">
  
      <label for="inputEmail"> Nome</label>
<input type="text"id= "inputNome" class=" form-control" placeholder="Nome" required autofocus>
</div>

  <div class="form-label-group">
  
<label for= "inputCPF"> CPF</label>
  <input type="number" size="10" id= "inputCPF" class=" form-control" placeholder="CPF" required autofocus>
</div>
<div class="form-label-group">

<label for= "inputNascimento">Data de Nascimento</label>
  <input type="date" id= "inputNascimento" class=" form-control" placeholder="Nascimento" required autofocus>
</div>
<div class=" checkbox mb-3">
<label> <input type="checkbox" valeu="1"> Ativo? </label>
</div>

<button class="btn btn-dark" type="button" onclick="tratarFormulario(event)" > Entrar </button>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    --Option 2: Separate Popper and Bootstrap JS--
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
    
    <script>
    
    function tratarFormulario(event){
    
    	console.log(event);
    	alert("Chegamos aonde queriamos!");
    
    }
    
    
    </script>
    <br> 

      
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-muted">© 2022</p>
          </div>
      
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
    
  </body>
</html>
  -->