<?php
/* Smarty version 3.1.33, created on 2018-10-02 17:35:59
  from 'C:\xampp\htdocs\tpWebII\templates\estadios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb3905f29ff16_73142878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68b16f2de9a68d3a757af969e921c0bb0e59742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\estadios.tpl',
      1 => 1538494554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb3905f29ff16_73142878 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUM</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Capacidad</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Estadios']->value, 'estadio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['estadio']->value) {
?>

                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['estadio']->value['id_estadio'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['estadio']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['estadio']->value['capacidad'];?>
</td>
                </tr>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
  </div>
<?php }
}
