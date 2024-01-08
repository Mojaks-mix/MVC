<?php
/* Smarty version 4.3.4, created on 2024-01-08 11:33:51
  from 'C:\xampp\htdocs\MVC_CRUD\APP\SMARTY_ENGINE\templates\Views\product\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659bcf8f8c49b3_31354239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f7f5eb02f088607865e603c3badefc2e2f2eec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\SMARTY_ENGINE\\templates\\Views\\product\\add.tpl',
      1 => 1704709960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Views/inc/header.tpl' => 1,
    'file:Views/inc/footer.tpl' => 1,
  ),
),false)) {
function content_659bcf8f8c49b3_31354239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Views/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center my-5 py-3">Add New Products</h1>

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

            <form class="p-5 border mb-5" method="POST" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>'products/store'),$_smarty_tpl ) );?>
">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required class="form-control" name="price" id="price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" required class="form-control" name="description" id="description">
                </div>

                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" required class="form-control" name="quantity" id="quantity">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Views/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
