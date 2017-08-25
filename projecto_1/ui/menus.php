<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Projecto1</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="empresa">Empresa</a></li>
            <li><a href="produtos">Produtos</a></li>
            <li><a href="servicos">Serviços</a></li>
            <li><a href="contato">Contato</a></li>
            <?php
                require_once __DIR__."/../helpers/Session.php";
                if(Session::isSessionSet()) {
                    echo "<li><a href=\"editar\">Editar</a></li>";
                }

            ?>
        </ul>
        <div class="col-sm-3 col-md-3">
            <form class="navbar-form" role="search" action="procura">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar menus" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
        <a href="?logout=true">logout</a>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login</h1><br>
                    <form action="/" method="post">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>