<?php
/* Smarty version 3.1.33, created on 2018-11-20 22:42:49
  from 'C:\xampp\htdocs\tpWebII\templates\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf47fd923e153_11018753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ad037246f2e5fc97843d594643d24fbfdc8d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\navAdmin.tpl',
      1 => 1542750168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf47fd923e153_11018753 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Navigation -->
<nav class="mainNav navbar navbar-expand-lg navbar-light fixed-top">
<div class="container">
<a class="navbar-brand" href="home">The Rolling Stones</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
  Menu
  <i class="fa fa-bars"></i>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="home">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="band">BAND</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tourAdmin">TOUR</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="music">MUSIC</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="usuarios">USERS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout">LOGOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"><?php echo mb_strtoupper($_SESSION['User'], 'UTF-8');?>
</a>
    </li>
  </ul>
</div>
</div>
</nav>

<!-- Page Header -->
  <header class="masthead">   <!-- Imagén de fondo del nav -->
<div class="container">
           <div class="overlay">
          </div>
            <div class="row">
              <div class="col-lg-8 col-md-10">
                <div class="site-heading">
                 </div>
              </div>
            </div>
  </div>
</header>
<?php }
}
