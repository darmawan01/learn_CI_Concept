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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Add New User</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo(site_url('user/Users/insert_act')) ?>" method="POST" name="add">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" id="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="button-group">
                        
                        <button type="submit" href="<?php echo(site_url('user/Users'))?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> List User</button>
                        <div class="pull-right">
                            <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                            <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Save</button>
                        </div>
                    </div>
                </form>        
            </div>
        </div>
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