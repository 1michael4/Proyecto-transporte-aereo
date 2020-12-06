<?php if(isset($_SESSION['user'])){ ?>
<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>


<div class="ui stackable container mg-top-10 grid">
    <div class="row">
        <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui segment">
                    <h1>Bienvenido</h1>
                    <p>Nombre usuario: <?php echo $_SESSION['user']->nombres ?></p>
                    <a href="?class=Administrador&view=profile">ver Perfil</a>
                    <a href="?class=Login&view=destroy">salir</a>                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('views/layouts/footer.php') ?>
</body>
</html>
<?php }else{ header('location:?class=Login&view=index'); } ?>