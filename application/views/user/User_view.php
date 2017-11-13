<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | Balekode</title>
    <link rel="stylesheet" href="<?php echo(base_url('asset/css/bootstrap.min.css'))?>">
</head>
<body>
    <div class="container">
        <hr>
        <a href="<?php echo(site_url('user/Users/insert_view')) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add User</a>
        <hr>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telephone</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($list as $user){

                ?>
            
                <tr>
                    <td><?php echo($no) ?></td>
                    <td><?php echo($user['nama']) ?></td>
                    <td><?php echo($user['alamat']) ?></td>
                    <td><?php echo($user['telephone']) ?></td>
                    <td><?php echo($user['username']) ?></td>
                    <td><?php echo($user['password']) ?></td>
                    
                </tr>
                <?php
                 $no++; 
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php
    $msg = $this->session->flashdata('message');
    if($msg){
        echo('<script>');
        echo('alert("'.$msg.'")');
        echo('</script>');
    }
?>
</body>
</html>