<?php /* Smarty version 3.1.22-dev/16, created on 2015-03-22 12:27:16
         compiled from "../app/View/smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1198874861550ea7140c2309_65468480%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419d8005e13e84c83cc8731a1c4c5a0816401a01' => 
    array (
      0 => '../app/View/smarty.tpl',
      1 => 1427023427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198874861550ea7140c2309_65468480',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/16',
  'unifunc' => 'content_550ea7141e30c7_57939883',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550ea7141e30c7_57939883')) {
function content_550ea7141e30c7_57939883 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1198874861550ea7140c2309_65468480';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>MPWAR Framework - Smarty</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css" />

 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
 
</head>
<body class=" intro">
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">

                <a href="/home">Menú</a>

            </li>
            <li>
                <a href="/twig">Plantilla básica Twig</a>
            </li>
            <li>
                <a href="/smarty">Plantilla básica Smarty</a>
            </li>
            <li>
                <a href="/user/1">Usuario por URL</a>
            </li>
            <li>
                <a href="/eloquent">Usuario en DB con Eloquent</a>
            </li>
            <li>
                <a href="/pdo">Usuario en DB con PDO</a>
            </li>
            <li>
                <a href="/newUser">Nuevo usuario</a>
            </li>
            <li>
                <a href="/404">Respuesta Http 404</a>
            </li>
            <li>
                <a href="/json">Ajax con Json response</a>
            </li>
            <li>
                <a href="/quijote/es">Traducciones</a>
            </li>
            <li>
                <a href="/logout">Logout</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <h1>MPWAR Framework</h1>
                    <h2>Esta plantilla ha sido creada con Smarty</h2>
                    <h4>Estos son los datos personales de este usuario:</h4>
                    <div class="col-lg-3 col-md-offset-3">
                        <dl class="dl-horizontal">
                            <dt>Nombre:</dt>
                            <dd><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</dd>
                            <dt>Email:</dt>
                            <dd><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
</dd>
                        </dl>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

 
<?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Menu Toggle Script -->
<?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
<?php echo '</script'; ?>
>
<style>
    /*!
* Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
* Code licensed under the Apache License v2.0.
* For details, see http://www.apache.org/licenses/LICENSE-2.0.
*/
    /* Toggle Styles */
    html{
        height: 100%;
    }
    .intro {

        height: 100%;
        text-align: center;
        color: #fff;
        background: url("assets/img/intro-bg.jpg") no-repeat scroll center bottom / cover #fff;
    }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled {
        padding-left: 250px;
    }
    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #000;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }
    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }
    /* Sidebar Styles */
    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }
    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }
    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }
    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }
    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }
    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }
    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }
        #wrapper.toggled {
            padding-left: 0;
        }
        #sidebar-wrapper {
            width: 250px;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 0;
        }
        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }
        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>
 
</body>
</html> <?php }
}
?>