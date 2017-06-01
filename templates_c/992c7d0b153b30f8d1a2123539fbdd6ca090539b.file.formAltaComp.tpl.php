<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 18:52:23
         compiled from ".\templates\formAltaComp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:829558ff733507c563-22796097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992c7d0b153b30f8d1a2123539fbdd6ca090539b' => 
    array (
      0 => '.\\templates\\formAltaComp.tpl',
      1 => 1496335933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '829558ff733507c563-22796097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58ff733523b722_00476120',
  'variables' => 
  array (
    'disciplinas' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff733523b722_00476120')) {function content_58ff733523b722_00476120($_smarty_tpl) {?><div style="margin-top:50px;" class="panel panel-default col-md-7 col-md-offset-2">
  <h3>Alta de Competencia</h3>
    <form class="formComp" method="post" href="index.php?action=agregar_competencia">
          <select class="form-control" name="cdodisciplina">
            <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['disciplinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cdodisciplina'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
            <?php } ?>
          </select>
          <br>
            <input class="form-control" type="text"  placeholder="Nombre de Competencia">
          <br>
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha" >
          <br>
            <input class="form-control" type="text" placeholder="Lugar">
          <br>
            <input class="form-control" type="text" placeholder="Localidad">
          <br>
            <input class="form-control" type="text" placeholder="Organizador">
          <br>
              <input id="individual" type="checkbox" name="individual">Individual
          <br>
          <br>
            <label>Fecha Limite</label>
            <input class="form-control" type="date" name="fechaLimite" >
          <br>
            <input class="form-control" type="number" placeholder="Cantidad de Jueces">
          <br>
            <input id="tv" type="checkbox" name="tv">Cobertura TV
          <br>
          <br>
            <input class="form-control" type="text" placeholder="Mapa">
          <br>
            <input class="form-control" type="text" placeholder="Web">
          <br>
          <br>
            <button type="submit" name="button">Crear</button>
          <br>
    </form>
</div>
<?php }} ?>