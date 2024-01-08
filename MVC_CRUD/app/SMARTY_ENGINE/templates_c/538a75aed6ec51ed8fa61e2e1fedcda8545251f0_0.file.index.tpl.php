<?php
/* Smarty version 4.3.4, created on 2024-01-07 14:00:22
  from 'C:\xampp\htdocs\MVC_CRUD\APP\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659aa0662ac812_12103586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '538a75aed6ec51ed8fa61e2e1fedcda8545251f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_CRUD\\APP\\templates\\index.tpl',
      1 => 1704362001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659aa0662ac812_12103586 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 include VIEWS.'inc/header.php'<?php echo '?>'; ?>




<h1 class="text-center  my-5 py-3">View All Products </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
                <?php echo '<?php'; ?>
 if(isset($success)): <?php echo '?>'; ?>

                    <h3 class="alert alert-success text-center"><?php echo '<?php'; ?>
  echo $success; <?php echo '?>'; ?>
</h3>
                <?php echo '<?php'; ?>
 endif; <?php echo '?>'; ?>

                <?php echo '<?php'; ?>
 if(isset($error)): <?php echo '?>'; ?>

                    <h3 class="alert alert-danger text-center"><?php echo '<?php'; ?>
  echo $error; <?php echo '?>'; ?>
</h3>
                <?php echo '<?php'; ?>
 endif; <?php echo '?>'; ?>

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

                    <?php echo '<?php'; ?>
 $i=1; <?php echo '?>'; ?>

                    <?php echo '<?php'; ?>
 foreach($products as $row):  <?php echo '?>'; ?>

                        <tr>
                            <td> <?php echo '<?php'; ?>
 echo $i; $i++; <?php echo '?>'; ?>
</td>
                            <td><?php echo '<?php'; ?>
 echo $row['name']; <?php echo '?>'; ?>
</td>
                            <td><?php echo '<?php'; ?>
 echo $row['price']; <?php echo '?>'; ?>
 <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo '<?php'; ?>
 echo $row['description']; <?php echo '?>'; ?>
</td>
                            <td><?php echo '<?php'; ?>
 echo $row['quantity']; <?php echo '?>'; ?>
</td>
                            <td>
                                <a href="<?php echo '<?php'; ?>
 url('products/edit/'.$row['id']) <?php echo '?>'; ?>
" class="btn btn-info" >Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo '<?php'; ?>
 url('products/delete/'.$row['id']) <?php echo '?>'; ?>
" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php echo '<?php'; ?>
  endforeach; <?php echo '?>'; ?>

                </tbody>
            </table>


        </div>
    </div>
</div>



<?php echo '<?php'; ?>
 include VIEWS.'inc/footer.php'<?php echo '?>';
}
}
