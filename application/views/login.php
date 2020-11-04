<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="icon" href="<?= base_url('assets/images/icon_scan.png') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="background-color: #005792">
    <div class="text-center py-0" style="transform: translateY(10%);">
        <div class="container">
            
            <div class="row" style="margin-top: 100px;">
                <div class="mx-auto col-10 bg-light col-md-4 p-3">
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-12">
                            <img class="d-block img-fluid mx-auto" src="<?= base_url('assets/images/pptik.png') ?>" width="250">
                            <h4><b>Finance</b></h4>
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('error_login')){ ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p class="mb-0"><?= $this->session->flashdata('error_login') ?></p>
                    </div>
                    <?php } ?>
                    <form action="<?php echo site_url('Login') ?>" method="post">
                        <div class="form-group"> 
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-block" style="background-color: #005792; color:white">LOGIN</button>
                    </form>
                    <p class="pt-3">All Rights Reserved © Masmoe 2020</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>