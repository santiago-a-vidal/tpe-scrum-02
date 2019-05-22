<?php
/* Smarty version 3.1.33, created on 2018-11-21 21:13:56
  from 'C:\xampp\htdocs\tpWebII\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5bc842d8c43_39872816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ed82607a4c0cba78ce31bfef4d918815c2e68c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\comentarios.tpl',
      1 => 1542830944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf5bc842d8c43_39872816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <div class="bordeArribaNews">
      <h1>COMMENTS</h1>
    </div>
      <section class="comentarios">

      </section>
    <div class="bordeAbajoNews">

    </div>
  <?php if ((isset($_SESSION['User']))) {?>
  <input type="input" hidden="hidden" class="idUsuario" data="<?php echo $_SESSION['idUsuario'];?>
">
  <?php if ($_SESSION['admin'] == 1) {?>
  <input type="input" hidden="hidden" class="admin" data="admin">
  <?php } else { ?>
  <input type="input" hidden="hidden" class="admin" data="noAdmin">
  <?php }?>
  <div class="bordeArribaNews">
    <h1>COMMENT</h1>
  </div>
  <form>
    <div class="form-group">
      <textarea class="form-control" id="texto" rows="5" placeholder="Comment Here"></textarea>
    </div>
  </form>
  <div class="form-group">
    <label for="puntaje">Score</label>
    <select class="form-control" id="puntaje">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="button" class="btn btn-danger" id="comment" name="comment">Send</button>
  <div class="bordeAbajoNews">
  </div>
  <?php }?>
</div>
<?php }
}
