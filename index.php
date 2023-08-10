<!DOCTYPE html>
<html>
<head>
    <title>Sua Página</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="conteudo-central">
        <?php
        if (isset($_GET['content'])) {
            $content = $_GET['content'] . '.html';
            include $content;
        } else {
            include 'conteudo1.html'; // Padrão ao carregar a página
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>