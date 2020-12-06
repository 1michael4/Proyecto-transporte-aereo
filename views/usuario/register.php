<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>

<div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui segment">
                    <i class="user plus huge icon"></i>
                    <div class="ui divider"></div>
                    <div class="ui form">
                        <div class="field mg-top-10">
                            <form action="?class=Usuarios&view=store" method="post">

                            <div class="ui left icon input big mg-top-30">
                                    <i class="user icon"></i>
                                    <input type="text" name="nombres" placeholder="Nombres" required>
                                </div>

                                <div class="ui left icon input big mg-top-30">
                                    <i class="id card icon"></i>
                                    <input type="text" name="apellidos" placeholder="Apellidos" required>
                                </div>

                                <div class="ui left icon input big mg-top-30">
                                    <i class="envelope icon"></i>
                                    <input type="email" name="correo" placeholder="Correo" required>
                                </div>

                                <div class="ui left icon input big mg-top-30">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Contraseña" required>
                                </div>

                                <div class="ui left icon input big mg-top-30">
                                    <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="date" placeholder="Contraseña" required>
                                </div>

                                <button  class="ui animated fade button mg-top-30">
                                    <div class="visible content">
                                        <h3>Registrar</h3>
                                    </div>
                                    <div class="hidden content">
                                        <i class="plus icon"></i>
                                    </div>
                                </button>
                                
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