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
    <!-- Styles -->
    <style>
       
        .input-group, .form-group{
            margin-bottom: 10px;
        }

    </style>

</head>
<body style="background:#343744">
    <div>
        <img class="img-responsive" style="width:100% ;" src="<?php echo e(url('img/loginUP.png')); ?>">
    </div>
    <?php if(Route::has('login')): ?>
    <div class="top-right links">
        <?php if(auth()->guard()->check()): ?>
        <center style="margin-top: 10px; font-family: Comic Sans MS; ">
            <h4>
                Hi  <b><?php echo e(Auth::user()->name); ?>,</b>
            </h4><br/>
            You are already loggedIn !!!<br/>
            GoTo -> <a href="<?php echo e(url('/home')); ?>">Home</a><br/>
            <a href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            SignOut
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

        </form>
        </center>
           
        <?php else: ?>
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="container-fluid" style="margin-top: 8vh;position: relative">
                    <div class="row" >
                    
                        
                            <div class="col-lg-offset-4 col-lg-4 ">
                            <div class="input-group">
                                <span class="input-group-addon" style="background-color: #3A3E4C ;border:none"><i class="fa fa-user fa-fw" style="color:whitesmoke"></i></span>
                                <input placeholder="john@mail.com" id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" style="background-color: #3A3E4C; border:none; color:white;" required autofocus>
                            </div>
                            <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                            <?php endif; ?>
                            </div>

                            <div class="col-lg-offset-4 col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon" style="background-color: #3A3E4C ;border:none "><i class="fa fa-key fa-fw" style="color:whitesmoke"></i></span>
                                <input placeholder="password" id="password" type="password" class="form-control" name="password" style="background-color: #3A3E4C ; border:none; color:white;" required>
                            </div>
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?> 
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
        <?php endif; ?>
    </div>
    <?php endif; ?>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>