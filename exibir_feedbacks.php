<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de contato - Gestor Industrial</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <a class="container-texto-logo-sorriziho-para-voces" href="index.html">
        <h2>Gestor</h2>
        <h1 class="logo-emoji">🔧</h1>
        <h2>Industrial</h2>
      </a>
      <input type="checkbox" id="checkbox_toggle">
      <label for="checkbox_toggle" class="hamburger">
        <p>&#9776</p>
        <p>X</p>
      </label>
      <nav>
        <a href="index.html"> Página principal </a>
        <a href="sobre.html"> Sobre a profissão </a>
        <a href="profissao.html"> Dia a dia </a>
        <a href="campoatuacao.html"> Campo de atuação </a>
        <a href="empresasenvolvidas.html"> Empresas do campo </a>
        <a href="materiasutilizados.html" id="atuacao"> Ferramentas utilizadas </a>
      </nav>
    </header>
    <main>
        <section class="main-sect">
            <?php
            $file = "feedbacks.json";
            $feedbacks = [];
            if(file_exists($file)){
                $feedbacks = json_decode(file_get_contents($file),true);
            }
            if(!empty($feedbacks)){
                foreach($feedbacks as $feedback){
                    echo "<div class='feedback'>";
                    echo "<div>";
                    echo "<p>nome:</p>";
                    echo "<p>". htmlspecialchars($feedback['nome']) ."</p>";
                    echo "</div>";

                    echo "<div>";
                    echo "<p>e-mail:</p>";
                    echo "<p>". htmlspecialchars($feedback['email']) ."</p>";
                    echo "</div>";

                    echo "<div>";
                    echo "<p>mensagem:</p>";
                    echo "<p>". htmlspecialchars($feedback['feedback']) ."</p>";
                    echo "</div>";

                    echo "</div>";
                }
            }else{
                echo '<h3 style="color:crimson; text-align:center;">Nenhum feedback foi encontrado na database!</h3>';
            }
            ?>
        </section>
    </main>
    <footer>
      <div class="text-container">
        <ol>
          <ul>
            <a href="contato.html">Fale conosco</a>
          </ul>
          <ul>
            <a href="fontesbibliograficas.html">Materiais utilizados para a criação do site</a> 
          </ul>
          <ul>
            <p>© 2024 autoria de Thiago Gabriel </p>
          </ul>
        </ol>
      </div>
      <div></div>
    </footer>
  </body>
</html>
<script src="js/headerShrink.js"></script>