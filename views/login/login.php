<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>


<?php if(@$_REQUEST['error']){ ?>
<div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui red inverted segment">
                        <h2>Correo o Contraseña Incorrecta</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if(@$_REQUEST['created']){ ?>
<div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui green inverted segment">
                        <h2>Usuario Creado Correctamente</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

    <div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui segment">
                    <i class="user circle huge icon"></i>
                    <div class="ui divider"></div>
                    <div class="ui form">
                        <div class="field mg-top-10">
                            <form action="?class=Login&view=auth" method="post">
                                <div class="ui left icon input big mg-top-30">
                                    <i class="user icon"></i>
                                    <input type="email" name="email" placeholder="Correo" required>
                                </div>
                                <div class="ui left icon input big mg-top-30">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Contraseña" required>
                                </div>

                                <button  class="ui animated black fade button mg-top-30">
                                    <div class="visible content">
                                        <h3>Entrar</h3>
                                    </div>
                                    <div class="hidden content">
                                        <i class="right arrow icon"></i>
                                    </div>
                                </button>
                                
                                <h3><a href="?class=Usuarios&view=register">¿No tienes cuenta? ¡Registrate!</a></h3>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>