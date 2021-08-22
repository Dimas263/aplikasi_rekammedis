<?php 
require_once "../_config/config.php";
if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url()."';</script>";
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?=base_url('_assets/img/logo2.png');?>" type="image/x-icon">
        <title>Hospital</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?=base_url('_assets/css/app.css')?>">
        <style>
            .loader {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: #F5F8FA;
                z-index: 9998;
                text-align: center;
            }

            .plane-container {
                position: absolute;
                top: 50%;
                left: 50%;
            }
        </style>
        <!-- Js -->
        <!--
        --- Head Part - Use Jquery anywhere at page.
        --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
        -->
        <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
    </head>
    <body class="light">
    <!-- Pre loader -->
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <div class="page parallel">
            <div class="d-flex row">
                <div class="col-md-3 white shadow">
                    <div class="p-3 mt-3" align="center">
                        <img src="<?=base_url('_assets/img/logo2.png')?>" width="100" alt=""/>
                    </div>
                    <div class="mt-3">
                        <h1 align="center">Hospital</h1>
                        <?php
                        if(isset($_POST['login'])){
                            $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                            $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                            $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass' " ) or die (mysqli_error($con));
                            if(mysqli_num_rows($sql_login) > 0){
                                $_SESSION['user'] = $user;
                                echo "<script>window.location='".base_url('dashboard/index.html')."';</script>";
                            } else
                            {
                                ?>
                                <div class="p-3 mt-3">
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Login gagal!</strong> Silahkan coba lagi
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <form action="" method="post" class="p-3 mt-3">
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input type="text" name="user" class="form-control form-control-lg"
                                       placeholder="Username">
                            </div>
                            <div class="form-group has-icon"><i class="icon-lock"></i>
                                <input type="password" name="pass" class="form-control form-control-lg"
                                       placeholder="Password">
                            </div>
                            <input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value="Log In">
                        </form>
                    </div>
                </div>
                <div class="col-md-9  height-full blue accent-5 align-self-center text-center" data-bg-repeat="false"
                     data-bg-possition="center"
                     style="background: url('<?=base_url('_assets/img/05.jpeg')?>') #FFEFE4">
                </div>
            </div>
        </div>
        <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
    <!--/#app -->
    <script src="<?=base_url('_assets/js/app.js')?>"></script>

    <!--
    --- Footer Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

    <!-- Chatra {literal} -->
    <script>
       (function(d, w, c) {
           w.ChatraID = 'fYdnqFcGKwewTnX6y';
           var s = d.createElement('script');
           w[c] = w[c] || function() {
               (w[c].q = w[c].q || []).push(arguments);
           };
           s.async = true;
           s.src = 'https://call.chatra.io/chatra.js';
           if (d.head) d.head.appendChild(s);
       })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->

    </body>
    </html>
    <?php
}
?>