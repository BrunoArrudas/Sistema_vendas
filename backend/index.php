<?php
    require_once("template/header.php");
    require_once 'dao/GrupoUsuarioDAO.php';

    $grupoUsuarioDao = new GrupoUsuarioDAO();

    //echo $grupoUsuarioDao->getById(1)->getDataCriacao();
?>
    <h1>Olá Sistema Vendas Body</h1>
</body>

<?php
    require_once("template/footer.php");
?>