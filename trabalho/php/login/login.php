<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPYINGON GAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/login.css">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center col-12 col-md-4 p-4 rounded-4" id="centralizar">

        <form class="col-12 m-3 needs-validation" novalidate action="../validacao/validarLogin.php" method="post" id="loginForm">

            <div class="d-flex justify-content-center align-items-center col-12 mb-4">
                <img src="../../Images/logoMarca.png" id="logo">
            </div>
            <?php
            if (isset($_GET['erro'])) {
                $erro = $_GET['erro'];

                switch ($erro) {
                    case 1:
                        $mensagem = "Email ou senha incorretos. Por favor, tente novamente.";
                        echo '<div class="alert alert-danger" role="alert">' . $mensagem . '</div>';
                        break;
                    case 2:
                        $mensagem = "Por favor, preencha o campo de email";
                        echo '<div class="alert alert-danger" role="alert">' . $mensagem . '</div>';
                        break;
                    case 2.1:
                        $mensagem = "Por favor, preencha o campo de senha";
                        echo '<div class="alert alert-danger" role="alert">' . $mensagem . '</div>';
                        break;
                    case 3:
                        $mensagem = "Erro! tente novamente";
                        echo '<div class="alert alert-danger" role="alert">' . $mensagem . '</div>';
                        break;
                    case 4:
                        $mensagem = "Você se desconectou com sucesso!";
                        echo '<div class="alert alert-success" role="alert">' . $mensagem . '</div>';
                        break;
                    default:
                        $mensagem = "Erro desconhecido.";
                        echo '<div class="alert alert-danger" role="alert">' . $mensagem . '</div>';
                        break;
                }
            }

            ?>
            <div class="form-floating mb-3 col-12">
                <input type="email" class="form-control" id="inputEmail" placeholder="nome@gmail.com" name="email" required>
                <label for="inputEmail">Email <span class="text-secondary">(Obrigatorio)</span></label>
                <div class="invalid-feedback">
                    Ponha o nome de usuário.
                </div>
            </div>
            <div class="form-floating mb-3 col-12">
                <input type="password" class="form-control" id="inputSenha" placeholder="senha" name="senha" required>
                <label for="inputSenha">Senha <span class="text-secondary">(Obrigatorio)</span></label>
                <div class="invalid-feedback">
                    Ponha a senha.
                </div>
            </div>
            <div class="col-auto mb-3">
                <input type="submit" class="btn btn-outline-primary fs-5 mb-3 col-12 p-2" name="enviar" value="Entrar" onclick="return validarForm()">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-0">
                <label for="">Não tem uma conta? <a href="criarConta.php" id="link">Criar conta</a></label>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

<script>
        function validarForm() {
            var email = document.getElementById('inputEmail').value;
            var senha = document.getElementById('inputSenha').value;

            if (email.trim() === '') {
                alert('Por favor, insira seu email.');
                return false;
            }

            if (senha.trim() === '') {
                alert('Por favor, insira sua senha.');
                return false;
            }

            return true;
        }
    </script>
</body>

</html>