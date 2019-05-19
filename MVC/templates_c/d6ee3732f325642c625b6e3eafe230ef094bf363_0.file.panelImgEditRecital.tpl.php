<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:42:08
  from 'C:\xampp\htdocs\tpWebII\templates\panelImgEditRecital.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6c0409caa98_02146688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6ee3732f325642c625b6e3eafe230ef094bf363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\panelImgEditRecital.tpl',
      1 => 1542897408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6c0409caa98_02146688 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>IMAGES</h1>
      </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
      <figure class= "noticia col-lg-3 col-md-3 col-sm-3 col-xs-3 linkImg">
          <img width="90%" height="200px" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" alt="Image">
          <figcaption>
          <a class="btn btn-danger link" href="eliminarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
">Delete</a>
         </figcaption>
      </figure>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
  </div>
</div> <!-- Fin container -->
<?php }
}
}
