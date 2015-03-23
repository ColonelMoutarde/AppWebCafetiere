<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Valentin P.">

    <title>Register - My Coffee Maker</title>

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

<br />
<a href="<?php echo site_url('login'); ?>"><img src="<?php echo asset_url();?>img/banner.png" class="img-responsive center-block" /></a>

<div class="container">

    <form action="<?=site_url('register/do_register')?>" method="post">

        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Inscription</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a href="<?php echo site_url('login'); ?>" ">Connexion</a></div>
                </div>
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form">

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 25px">
                            <label for="user" class="col-md-3 control-label">Nom d'utilisateur</label>
                            <div class="col-md-9">
                                <input type="text" required="required" class="form-control" name="username_r" placeholder="Nom d'utilisateur">
                            </div>
                        </div>
                        <br />
                        <div class="form-group" style="margin-bottom: 25px">
                            <label for="firstname" class="col-md-3 control-label">Prénom</label>
                            <div class="col-md-9">
                                <input type="text" required="required" class="form-control" name="firstname_r" placeholder="Prénom">
                            </div>
                        </div>
                        <br />
                        <div class="form-group" style="margin-bottom: 25px">
                            <label for="password" class="col-md-3 control-label">Mot de passe</label>
                            <div class="col-md-9">
                                <input type="password" required="required" class="form-control" name="password_r" placeholder="Mot de passe">
                            </div>
                        </div>
                        <br />
                        <div class="form-group" style="margin-bottom: 25px">
                            <label for="email" class="col-md-3 control-label">Adresse email</label>
                            <div class="col-md-9">
                                <input type="email" required="required" class="form-control" name="email_r" placeholder="Adresse email">
                            </div>
                        </div>
                        <br />
                        <div class="form-group" style="margin-bottom: 25px">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <input id="btn-signup" value="S'enregistrer" type="submit" name="register" class="btn btn-info">
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Tu disposes d'un compte ?
                                    <a href="<?php echo site_url('login'); ?>" >
                                        Reviens à l'écran de connexion ici.
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