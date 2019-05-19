<?php
/* Smarty version 3.1.33, created on 2019-05-17 00:33:59
  from 'C:\xampp\htdocs\tpeBD\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdde557363f62_52872801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8350d7f35793390d031e9d970f7cbf93eb0832' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBD\\templates\\home.tpl',
      1 => 1558045957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cdde557363f62_52872801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaCarousel">

      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner imageCarousel">
          <div class="item active">
            <img src="img/headerrs.png" alt="RS 1">
          </div>

          <div class="item">
            <img src="img/rs2.jpg" alt="RS 2">
          </div>
          <div class="item">
            <img src="img/rs3.jpg" alt="RS 3">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="bordeAbajoCarousel col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
