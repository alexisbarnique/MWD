<?php include('server.php'); ?>
<?php include('header.php'); ?>
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h3>Agregar Usuario</h3>
                <a href="usuarios.php">
                    <button class="btn btn-fill btn-info">
                        <i class="fa fa-undo"></i>
                    </button>
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form" method="post" action="register.php">
                    <?php include('error.php'); ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname" value="<?php echo $fullname; ?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password_1" />
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_2" />
                        </div>
                        <select class="form-group" name="rol">
                            <option value="admin">Admin</option>
                            <option value="public">Public</option>
                        </select> 
                        <div class="form-group text-center">
                            <button class="btn btn-info" name="reg_user" type="submit">Crear</button>
                            <button href="cms/usuarios.html" class="btn btn-warning">cancelar</button>
                        </div>
                    </form>
                </div>
            </div>     
        </div>
    </div>
</div>
<?php include('footer.php'); ?>