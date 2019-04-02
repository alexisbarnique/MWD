<?php include('header.php'); ?>
<?php include('update_user.php'); ?>

<?php

$user_id = $_GET['user_id'];
$db = mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');
$query = "SELECT * FROM usuarios WHERE id='$user_id'";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);

?>
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h3>Editar Usuario</h3>
                <a href="usuarios.php"><button class="btn btn-fill btn-info"><i class="fa fa-undo"></i></button></a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form" method="post" action="edit.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control"
                                value="<?php echo $row['username']; ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control"
                                value="<?php echo $row['fullname']; ?>"/>
                        </div>
                        <div>
                            <select class="form-group" name="rol" value="<?php echo $row['rol']; ?>">
                                <option value="admin">Admin</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        
                        <div class="form-group text-center">
                            <button type="submit" name="edit_user" class="btn btn-info">Editar</button>
                            <a href="usuarios.php"><button class="btn btn-warning">cancelar</button></a>
                        </div>
                    </form>
                </div>
            </div>     
        </div>
    </div>
</div>
<?php include('footer.php'); ?>