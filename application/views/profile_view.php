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
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-user"></i> <?php echo $title; ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-2 col-md-offset-2 col-lg-8">
                <form class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Mes informations</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Nom d'utilisateur</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Nom d'utilisateur" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Prénom" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Nom" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Adresse</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Addresse" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Ville</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Ville" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Code postal</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Code postal" class="form-control">
                            </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Pays</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Pays" class="form-control">
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
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>