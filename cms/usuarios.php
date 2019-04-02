<?php include('header.php'); ?>
<?php include('delete.php'); ?>

<?php 
    $enlace= mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($enlace, $query);
?>
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info" role="alert">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h3>Gestor de Usuarios</h3>
                <a href="register.php"><button class="btn btn-fill btn-info"><i class="fa fa-plus"></i></button></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Rol</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($resultado = mysqli_query($enlace, $query)) {
                    while ($user = mysqli_fetch_row($resultado)) {
                ?>
                    <tr>
                        <th scope=row><?php echo $user[0];?></th>
                        <td><?php echo $user[1];?></td>
                        <td><?php echo $user[2];?></td>
                        <td><?php echo $user[4];?></td>
                        <td>
                            <a href="edit.php?user_id=<?php echo $user[0]; ?>">
                                <button class="btn btn-fill btn-success">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>    
                            <a href="delete.php?del=<?php echo $user[0]; ?>">
                                <button class="btn btn-fill btn-danger" name="del_user">
                                    <i class="fa fa-times"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php
                    } 
                }
                mysqli_free_result($resultado); 
                mysqli_close($db);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
