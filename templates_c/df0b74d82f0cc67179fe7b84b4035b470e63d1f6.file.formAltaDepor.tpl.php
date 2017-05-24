<?php /* Smarty version Smarty-3.1.14, created on 2017-05-24 18:45:44
         compiled from ".\templates\formAltaDepor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375259036862ddd994-23327340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0b74d82f0cc67179fe7b84b4035b470e63d1f6' => 
    array (
      0 => '.\\templates\\formAltaDepor.tpl',
      1 => 1495644190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375259036862ddd994-23327340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59036862e9f424_20910222',
  'variables' => 
  array (
    'personas' => 0,
    'p' => 0,
    'categorias' => 0,
    'c' => 0,
    'federaciones' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59036862e9f424_20910222')) {function content_59036862e9f424_20910222($_smarty_tpl) {?><div style="margin-top:50px;" class="panel panel-default col-md-7 col-md-offset-2">
  <h3>Alta Deportista</h3>
    <form class="formDeportista" method="post" href="index.php?action=agregar_deportista">

      <select class="form-control" name="doc_deportista">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['personas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['nrodoc'];?>
;<?php echo $_smarty_tpl->tpl_vars['p']->value['tipodoc'];?>
">Dni : <?php echo $_smarty_tpl->tpl_vars['p']->value['nrodoc'];?>
 , Tipo Doc: <?php echo $_smarty_tpl->tpl_vars['p']->value['tipodoc'];?>
</option>
        <?php } ?>
      </select>
      <br>
          <input id="federado" type="checkbox" name="federado">Federado
      <br>
      <br>
          <label>Ultima Federacion</label>
          <input class="form-control" type="date" name="fecha" >
        <br>
          <input class="form-control" type="text" name="nroLicencia" placeholder="Numero Licencia">
        <br>
        <select class="form-control" name="categoria">
          <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['cdocategoria'];?>
;<?php echo $_smarty_tpl->tpl_vars['c']->value['cdodisciplina'];?>
">Categoria: <?php echo $_smarty_tpl->tpl_vars['c']->value['cdocategoria'];?>
, Disciplina : <?php echo $_smarty_tpl->tpl_vars['c']->value['cdodisciplina'];?>
</option>

          <?php } ?>
        </select>
        <br>
        <input id="addFederaciones" type="checkbox" >
        <br>
        <div> <label>Agregar a Federacion?</label>
              <select  id="federaciones" class="form-control" name="cdoFederacion" disabled="true">
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['federaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['f']->value['cdofederacion'];?>
;<?php echo $_smarty_tpl->tpl_vars['f']->value['disciplina'];?>
">Codigo Federacion: <?php echo $_smarty_tpl->tpl_vars['f']->value['cdofederacion'];?>
, Codigo Disciplina: <?php echo $_smarty_tpl->tpl_vars['f']->value['cdodisciplina'];?>
</option>
                <?php } ?>
              </select>
        </div>
        <br>
          <button type="submit" name="button">Submit</button>
        <br>
    </form>
</div>
<?php }} ?>