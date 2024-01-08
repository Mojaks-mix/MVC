<?php
/* Smarty version 4.3.4, created on 2024-01-08 10:11:29
  from 'C:\xampp\htdocs\MVC_CRUD\APP\SMARTY_ENGINE\templates\Views\product\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659bbc414eca45_15140096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3708dd45ecb46f9fa6bae2077b5b73d3507afe79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\SMARTY_ENGINE\\templates\\Views\\product\\delete.tpl',
      1 => 1704699973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Views/inc/header.tpl' => 1,
    'file:Views/inc/footer.tpl' => 1,
  ),
),false)) {
function content_659bbc414eca45_15140096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Views/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <?php if ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
                <h3 class="alert alert-success text-center"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                <h3 class="alert alert-danger text-center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
            <?php }?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Views/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
