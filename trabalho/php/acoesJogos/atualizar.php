    <?php
    session_start();

    if (
        isset($_GET['novoNome']) && isset($_GET['nomeOriginal']) && isset($_GET['novaDescricao']) && isset($_GET['categoria']) &&
        !empty(trim($_GET['novoNome'])) && !empty(trim($_GET['nomeOriginal'])) && !empty(trim($_GET['novaDescricao'])) && !empty(trim($_GET['categoria'])))
    {

        require '../../database/banco.php';

        $nomeJogo = $_GET['nomeOriginal'];
        $novoNome = $_GET['novoNome'];

        $novaDescricao = $_GET['novaDescricao'];
        $categoria = $_GET['categoria'];

        $verificar = $conn->prepare('SELECT * FROM jogos WHERE nomeJogo = :nomeJogo');
        $verificar->bindValue(':nomeJogo', $nomeJogo);
        $verificar->execute();

        if ($verificar->rowCount() == 1) {
            $update = "UPDATE jogos SET nomeJogo = :novoNomeJogo, descricao = :descricao, jogoCategoria = :jogoCategoria WHERE jogos.nomeJogo = :nomeJogo";
            $atualizar = $conn->prepare($update);
            $atualizar->bindValue(':novoNomeJogo', $novoNome);
            $atualizar->bindValue(':descricao', $novaDescricao);
            $atualizar->bindValue(':jogoCategoria', $categoria);
            $atualizar->bindValue(':nomeJogo', $nomeJogo);
            $atualizar->execute();

            header("Location: ../index/index.php?sucesso=4");
            exit();
        } else {
            header('Location: ../index/index.php?erro=6');
            exit();
        }
    } else {
        header("Location: ../acoesJogos/teste.php?erro");
        exit();
    }
