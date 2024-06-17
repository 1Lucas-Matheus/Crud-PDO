<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPYINGON GAMES</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="../../images/logoDois.png" id="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="d-flex justify-content-end navbar-nav col-12 mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $nome ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-target="#adicionarComentario" data-bs-toggle="modal">perfil </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="sairConta.php" method="post"><input type="submit" class="dropdown-item" value="Sair da conta"></form>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="adicionarComentario" aria-hidden="true" aria-labelledby="divAdicionarComentario" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="divAdicionarComentario">Adicionar Comentário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="nomeJogo" class="form-label">Nome de usuário:</label>
          <div class="mb-2">
            <label><?php echo $nome ?></label>
          </div>
          <hr>
          <label for="descricaoJogo" class="form-label">Email:</label>
          <div class="mb-2">
            <label><?php echo $email ?></label>
          </div>
          <hr>
          <label for="descricaoJogo" class="form-label">Tipo de conta:</label>
          <div>
            <label><?php switch ($idPatamar) {
                      case 1:
                        echo "Cliente";
                        break;
                      case 2:
                        echo "Administrador";
                        break;
                    } ?></label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
          <form action="atualizar.php"> <button class="btn btn-primary" data-bs-toggle="modal">Adicionar</button> </form>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<style>
  #logo {
    width: 140px;
  }
</style>