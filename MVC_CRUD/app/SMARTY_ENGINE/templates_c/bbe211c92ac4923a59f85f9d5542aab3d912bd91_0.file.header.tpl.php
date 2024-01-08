<?php
/* Smarty version 4.3.4, created on 2024-01-08 11:33:47
  from 'C:\xampp\htdocs\MVC_CRUD\APP\SMARTY_ENGINE\templates\Views\inc\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659bcf8b198ee2_07727119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbe211c92ac4923a59f85f9d5542aab3d912bd91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\SMARTY_ENGINE\\templates\\Views\\inc\\header.tpl',
      1 => 1704709933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659bcf8b198ee2_07727119 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>CRUD_MVC</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array(),$_smarty_tpl ) );?>
">
      <img src="<?php echo SITE_URL;?>
assets/images/logo.jpg" width="100" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array(),$_smarty_tpl ) );?>
">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>'products/index'),$_smarty_tpl ) );?>
">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>'products/add'),$_smarty_tpl ) );?>
">Add Product</a>
        </li>
        
      </ul>
    
    </div>
  </nav>
<?php }
}
