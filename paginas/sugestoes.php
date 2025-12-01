<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destravei</title>
    <base href="http://localhost/destravei/">
    <link rel="shortcut icon" href="audiovisual/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img class="cabecalho-imagem" src="audiovisual/logo.png" alt="Destravei"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paginas/sobre.php">Sobre</a>
          <li class="nav-item">
          <a class="nav-link" href="paginas/aulas.php">Aulas</a>
          <li class="nav-item">
          <a class="nav-link" href="paginas/sugestoes.php">Sugestões</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<h1>Sua experiência</h1>
<form name="form-cadastro" id="form-cadastro">
    <label for="nome">⮩ Digite seu nome:</label>
    <input type="text" name="nome" id="nome" size="50" maxlength="40" placeholder="Nome completo" autocomplete="off" required class="formulario">
    <br>

    <label for="email">⮩ Digite seu e-mail:</label>
    <input type="email" name="email" id="email"
        maxlength="50" placeholder="Digite um e-mail válido"
        autocomplete="off" required class="formulario" inputmode="email">

    <label for="dataNascimento">⮩ Data Nascimento:</label>
    <input type="date" name="dataNascimento" id="dataNascimento" class="formulario" autocomplete="off" required>
    
    <br><br>
    <label>⮩ Selecione seu Gênero:</label><br>
    <input type="radio" name="genero" value="M" required> Masculino <br>
    <input type="radio" name="genero" value="F"> Feminino <br>
    <input type="radio" name="genero" value="N"> Não informar
    <br><br><br>

    <label>1. Sobre a plataforma:</label><br>
    <input type="radio" name="plataforma" value="G" required> Gostei <br>
    <input type="radio" name="plataforma" value="N"> Não gostei <br>
    <br><br><br>

    <label>2. Sobre os conteúdos:</label><br>
    <input type="radio" name="conteudos" value="R" required> Ruim <br>
    <input type="radio" name="conteudos" value="I"> Intermediário <br>
    <input type="radio" name="conteudos" value="B"> Bom <br>
    <br><br><br>

    <label for="mensagem"> 3. Escreva sua mensagem:</label>
    <textarea name="mensagem" id="mensagem" required placeholder="Digite uma mensagem" class="formulario" rows="5"></textarea>
    
    <button type="submit" class="btn-submit">
        Enviar Dados
    </button>
    <button type="reset" class="btn-reset">
        Redefinir
    </button>
</form>

<!-- Mensagem de sucesso -->
<p id="mensagem-sucesso" style="color: green; font-weight: bold; display: none;">
    ✅ Formulário enviado com sucesso!
</p>

<script>
    const form = document.getElementById("form-cadastro");
    const mensagemSucesso = document.getElementById("mensagem-sucesso");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // impede envio real para servidor
        mensagemSucesso.style.display = "block"; // mostra mensagem
        form.reset(); // limpa os campos após envio
    });
</script>
<br>

    <footer class="rodape">
          <p>Curso de Tecnologia em Análise e Desenvolvimento de Sistemas
            <br>
            Desenvolvido por Hellen Cristina</p>
    </footer>
    
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/fslightbox.js"></script>

</body>
</html>