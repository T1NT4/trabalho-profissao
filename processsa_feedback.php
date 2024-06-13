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
            if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)){
                $nome = htmlspecialchars($_POST['nome']);
                $email = htmlspecialchars($_POST['email']);
                $feedback = htmlspecialchars($_POST['feedback']);

                $feedback_data = [
                    "nome" => $nome,
                    "email" => $email,
                    "feedback" => $feedback
                ];
                $file = 'feedbacks.json';
                if(file_exists($file)){
                    $current_data = file_get_contents($file);
                    $array_data = json_decode($current_data, true);
                    $array_data[] = $feedback_data;
                    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
                }else{
                    $array_data = [];
                    $array_data[] = $feedback_data;
                    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
                }
                if(file_put_contents($file, $final_data)){
                    echo "<p>Seu feedback foi enviado com sucesso, se voce quiser ver os outros feedbacks de outras pessoas que nem você, clique ";
                    echo '<a href="exibir_feedbacks.php">aqui!';
                    echo "</p>";
                }else{   
                    echo '<p><b style="color:crimson">Seu feedback não foi enviado!</b>, ';
                    echo '<a href="contato.html">Tentar denovo?';
                    echo "</p>";
                }
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