<?php
/* Smarty version 3.1.33, created on 2019-05-23 06:50:26
  from 'C:\xampp\htdocs\MVC\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce62692c77dc1_15251638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108c1c527a6d82ecd8645bc13305cd3d4f4e58ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\nav.tpl',
      1 => 1558587025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce62692c77dc1_15251638 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="/">
              Basura Tandil</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link active" href="home"><i class="fas fa-home"></i> Home</a>
                  <a class="nav-item nav-link active" href="register"><i class="fas fa-home"></i> Registrarse</a>
                  <a class="nav-item nav-link active" href="reportar"><i class="fas fa-home"></i> Reportar basura</a>
                  <a class="nav-item nav-link active" href="mapa"><i class="fas fa-home"></i> Mapa usuario</a>
                  <a class="nav-item nav-link active" href="mapaAdmin"><i class="fas fa-home"></i> Mapa cuadrilla</a>
                  <a class="nav-item nav-link" href="/#about"><i class="fas fa-building"></i> About</a>
                  <a class="nav-item nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
              </div>
          </div>
      </div>
  </nav>
<?php }
}
