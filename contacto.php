<?php
$pageTitle = 'Nosotros' ;
$section = 'contacto';
include ('inc/header.php');
?>


<div class="contacto">
    <h1>Contacto</h1>

    <div class="container">

        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>¡Contactanos!</legend>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="nombre">Nombre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="nombre" placeholder="Nombre" id="nombre" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail" class="form-control" id="email" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="mensaje">Mensaje</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Tu mensaje aquí"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por contactarnos</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div><!-- /.container -->
</div>




<?php include ('inc/footer.php'); ?>