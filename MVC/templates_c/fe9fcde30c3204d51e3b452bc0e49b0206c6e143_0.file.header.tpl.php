<?php
/* Smarty version 3.1.33, created on 2018-11-22 22:41:34
  from 'C:\xampp\htdocs\tpWebII\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7228e919744_48109672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe9fcde30c3204d51e3b452bc0e49b0206c6e143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\header.tpl',
      1 => 1542922644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navAdmin.tpl' => 1,
    'file:navUsuario.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5bf7228e919744_48109672 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">
  <title>The Rolling Stones</title>
  <link href="img/favicon.png" rel="icon" type="image/x-icon" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Carousel -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/master.css" rel="stylesheet">

</head>

<body>

<?php if ((isset($_SESSION['User']))) {?>
  <?php if ($_SESSION['admin'] == 1) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:navUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
