<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Login</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/logoMid.css')); ?>" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet">
    <!-- Styles -->
    <style>

        #halfBody {
            height: 100vh;
            width: 100vw;
            overflow-x: hidden;
            overflow-y: hidden;
            background-size: cover;
            background-repeat: no-repeat !important;
            background: linear-gradient(to bottom,#3A3E4C 50%, #343744 50%);
        }
        .input-group, .form-group{
            margin-bottom: 10px;
        }

        /*html, body {*/
            /*font-family: 'Raleway', sans-serif;*/
            /*font-weight: 100;*/
            /*height: 100vh;*/
            /*margin: 0;*/
            /*overflow-y: hidden;*/

            /*background-image: linear-gradient(to bottom, #3A3E4C,#3A3E4C 55%,#343744 45%, #343744);*/
            /*background-size: cover;*/
            /*background-repeat: no-repeat;*/
        /*}*/
        /*a.ex1:hover, a.ex1:active {color: #BDE4E0;}*/

        /*.dropdown-toggle:active, .open .dropdown-toggle {*/
            /*background:#BDE4E0 !important;*/
            /*color:#000 !important;*/
        /*}*/

    </style>

</head>
<body id="halfBody">
<div class="row">
    <div id="imagePosition" class="col-xs-4 col-xs-offset-4 mobileimage">
        <img id="deskviewLogoAdjust" style="margin-left:-35px;width:180px ; height:100px;" src="<?php echo e(url('img/logo.svg')); ?>">
    </div>
</div>

        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="container-fluid" style="margin-top: 8vh;position: relative">
                <div class="row" >
                
                    
                        <div class="col-lg-offset-4 col-lg-4 ">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: #3A3E4C ;border:none"><i class="fa fa-user fa-fw" style="color:whitesmoke"></i></span>
                            <input placeholder="john@mail.com" id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" style="background-color: #3A3E4C; border:none; color:white;" required autofocus>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                        </div>

                        <div class="col-lg-offset-4 col-lg-4">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: #3A3E4C ;border:none "><i class="fa fa-key fa-fw" style="color:whitesmoke"></i></span>
                            <input placeholder="password" id="password" type="password" class="form-control" name="password" style="background-color: #3A3E4C ; border:none; color:white;" required>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        </div>


                        
                            
                            
                                
                                    
                                
                            
                        
                        


                        <div class="col-lg-offset-4 col-lg-4">
                            <div class="form-group">
                            <center><button type="submit" class="btn btn-default" style="color:white; background-color: #343744; width: 94%">
                               <strong> Login </strong>
                            </button>
                            </center>
                            
                                
                            
                        </div>
                        </div>
                </div>
                </div>
        </form>



<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>