<?php
/* Smarty version 4.3.4, created on 2024-01-08 11:34:16
  from 'C:\xampp\htdocs\MVC_CRUD\APP\SMARTY_ENGINE\templates\Views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659bcfa8ccd351_65521143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd856913a97382103f15268968e9d298e540a2219' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\SMARTY_ENGINE\\templates\\Views\\home.tpl',
      1 => 1704709948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Views/inc/header.tpl' => 1,
    'file:Views/inc/footer.tpl' => 1,
  ),
),false)) {
function content_659bcfa8ccd351_65521143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Views/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="jumbotron text-center mt-5">
  <h1 class="display-4">CRUD_MVC</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>'products'),$_smarty_tpl ) );?>
" role="button">SHOW PRODUCTS</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Views/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
