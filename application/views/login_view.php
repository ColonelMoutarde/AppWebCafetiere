<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Valentin P.">

    <title>Login - My Coffee Maker</title>

    <link rel="shortcut icon" href="<?php echo asset_url();?>img/coffee-favicon.png">

    <link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo asset_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo asset_url();?>css/login.css" rel="stylesheet">

    <style>
        body {
            background-image:url(<?php echo asset_url();?>img/coffee_background.jpg);
        }
    </style>


</head>

<body>

<?php echo form_open('verifylogin'); ?>

<br />
<a href="<?php echo site_url('login'); ?>"><img src="<?php echo asset_url();?>img/banner.png" class="img-responsive center-block" /></a>

<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Connexion</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Oublie mot de passe ?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" required="required" name="username" type="text" class="form-control" placeholder="Nom d'utilisateur">
                    </div>

                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="passowrd" required="required" name="password" type="password" class="form-control" placeholder="Mot de passe">
                    </div>

                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Se souvenir de moi
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:5px; position: relative; text-align: center;" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls" style="margin-bottom: 25px">
                            <?php echo validation_errors(); ?>
                            <input type="submit" id="btn-login" class="btn btn-success" value="Se connecter"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Pas de compte ?
                                <a href="<?php echo site_url('register'); ?>">
                                    Inscris-toi ici.
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>

</body>


<script src="<?php echo asset_url();?>js/jquery.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo asset_url();?>js/npm.js"></script>

</html>