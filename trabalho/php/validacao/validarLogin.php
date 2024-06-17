<?php
session_start();

    if (isset($_POST['email']) && isset($_POST['senha']) 
    && !empty(trim($_POST['email'])) && !empty(trim($_POST['senha']))) {
        require '../../database/banco.php';
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = 'SELECT nome, email, senha, idPatamar FROM contas WHERE email = :email AND senha = :senha';

        $resultado = $conn->prepare($sql);
        $resultado->bindValue(':email', $email);
        $resultado->bindValue(':senha', $senha);
        $resultado->execute();

        if ($resultado->rowCount() == 1) {
            $linha = $resultado->fetch(PDO::FETCH_ASSOC);
            $nome = $linha['nome'];
            $idPatamar = $linha['idPatamar'];
            $_SESSION['usuario'] = [
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha,
                'idPatamar' => $idPatamar,
            ];
            header("Location: ../index/index.php");
            exit();
        } else {
            header("Location: ../login/login.php?erro=1");
            exit();
        }
    } else {
        if(empty(trim($_POST['email']))){
            header("Location: ../login/login.php?erro=2");
        }else{
            header("Location: ../login/login.php?erro=2.1");
        }
        
        exit();
    }
?>
