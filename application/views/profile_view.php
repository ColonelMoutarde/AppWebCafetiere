<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $title; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?=site_url('home')?>">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-user"></i> <?php echo $title; ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <form class="form-horizontal" action="<?=site_url('home/update_profile')?>" method="post" >

        <div class="row">
            <div class="col-md-2 col-md-offset-2 col-lg-8">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Mes informations</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" name="firstname_p" value="<?php echo $userData['firstname']; ?>" placeholder="Prénom" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" name="lastname_p" value="<?php echo $userData['lastname']; ?>" placeholder="Nom" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Nom d'utilisateur</label>
                            <div class="col-sm-10">
                                <input type="text" id="disabledInput" value="<?php echo $userData['username']; ?>" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="text" name="password_p" placeholder="Mot de passe" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email_p" value="<?php echo $userData['email']; ?>" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Adresse</label>
                            <div class="col-sm-10">
                                <input type="text" name="adress_p" value="<?php echo $userData['adress']; ?>" placeholder="Addresse" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Ville</label>
                            <div class="col-sm-4">
                                <input type="text" name="city_p" value="<?php echo $userData['city']; ?>" placeholder="Ville" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Code postal</label>
                            <div class="col-sm-4">
                                <input type="text" name="zip_p" value="<?php echo $userData['zip']; ?>" placeholder="Code postal" class="form-control">
                            </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Pays</label>
                            <div class="col-sm-10">
                                <input type="text" name="country_p" value="<?php echo $userData['country']; ?>" placeholder="Pays" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-3 col-lg-8">
                                <label>
                                    <input id="stats-remember" type="checkbox" name="remember" value="1"> Activer les statistiques
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default">Annuler</button>
                                    <input value="Enregistrer" type="submit" name="update_p" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </fieldset>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>