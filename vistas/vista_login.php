<link href="css/signin.css" rel="stylesheet">
<div class="container">            
    <form class="form-signin" action="valida.php" method="POST">
        <div  class="page-header">
            <h2 class="form-signin-heading"><center><img src="img/logo.png" width="150" height="160"></center></h2>
        </div>
        <div class="form-group">
            <label class="sr-only" for="DECRETOS">DECRETOS</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                <input type="text" class="form-control" placeholder="Usuario" name="user" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="sr-only" for="DECRETOS">DECRETOS</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input type='password' class="form-control" placeholder="Contrase&ntilde;a" name="pass" required>
            </div>
        </div>
        <center><button class="btn btn-lg btn-success" type="submit"><span class="glyphicon glyphicon-log-in"></span> Ingresar</button></center><br><br>
        <div class="alert alert-danger" role="alert" style="display:<?php if (isset($_GET['error']) == "si") echo 'block';else echo 'none'; ?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> Usuario y/o Contrase&ntilde;a son incorrectos.
        </div>
    </form>
</div>