<?php /* Smarty version Smarty-3.1.14, created on 2017-06-09 16:44:24
         compiled from ".\templates\formInscripcion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2377959036a71ca0d39-11148941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc93242c7f5c7b43376494a4ca0ed98d9cbfa0ae' => 
    array (
      0 => '.\\templates\\formInscripcion.tpl',
      1 => 1497019336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2377959036a71ca0d39-11148941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59036a71d19149_79385098',
  'variables' => 
  array (
    'deportistas' => 0,
    'd' => 0,
    'competencias' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59036a71d19149_79385098')) {function content_59036a71d19149_79385098($_smarty_tpl) {?><div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-form" >
      <h3>Inscripcion Deportista a Competencia</h3>
  </div>
  <form class="formInscripcion col-md-6 col-md-offset-3" method="post" href="index.php?action=inscribir_deportista">
    <div class="form-group">
      <label class="control-label">Deportista</label>
      <select class="form-control col-md-2 deportistaSel" name="doc_deportista" >
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deportistas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['tipodoc'];?>
;<?php echo $_smarty_tpl->tpl_vars['d']->value['nrodoc'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
        <?php } ?>
      </select>
        <br>
        <label class="control-label">Competencia</label>
        <select class="form-control col-md-2 idCompetenciaSel" name="idcompetencia" >
          <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['competencias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['idcompetencia'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
          <?php } ?>
        </select>
        <br>
        <div class="">
          <button class="form-control btn-submit" type="submit" name="button">Inscribir</button>
        </div>
        <!--<button type="submit" name="button">Seleccionar</button>-->
      </div>

  </form>
  <div  id="resultadoinscripcion" >
  <!--<?php echo $_smarty_tpl->getSubTemplate ("servicio1lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
</div>
</div>
<?php }} ?>