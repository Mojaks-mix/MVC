<?php
/* Smarty version 4.3.4, created on 2024-01-08 11:35:03
  from 'C:\xampp\htdocs\MVC_CRUD\APP\SMARTY_ENGINE\templates\Views\product\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659bcfd703ed60_49676840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e3d933d56cdb41d725344c2823d1cc34515195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\SMARTY_ENGINE\\templates\\Views\\product\\index.tpl',
      1 => 1704710094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Views/inc/header.tpl' => 1,
    'file:Views/inc/footer.tpl' => 1,
  ),
),false)) {
function content_659bcfd703ed60_49676840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Views/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center my-5 py-3">View All Products</h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <?php if ((isset($_smarty_tpl->tpl_vars['success']->value))) {?>
                <h3 class="alert alert-success text-center"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                <h3 class="alert alert-danger text-center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
            <?php }?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['products'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['quantity'];?>
</td>
                            <td>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>('products/edit/').($_smarty_tpl->tpl_vars['row']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('name'=>('products/delete/').($_smarty_tpl->tpl_vars['row']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Views/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
