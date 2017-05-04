<?php /* Smarty version Smarty-3.1.14, created on 2017-05-04 05:45:26
         compiled from ".\templates\formAltaDepor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375259036862ddd994-23327340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0b74d82f0cc67179fe7b84b4035b470e63d1f6' => 
    array (
      0 => '.\\templates\\formAltaDepor.tpl',
      1 => 1493869472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375259036862ddd994-23327340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59036862e9f424_20910222',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59036862e9f424_20910222')) {function content_59036862e9f424_20910222($_smarty_tpl) {?><div style="margin-top:50px;" class="panel panel-default col-md-7 col-md-offset-2">
  <h3>Alta Deportista</h3>
    <form class="formDeportista" method="post" href="index.php?action=agregar_deportista">
          <input class="form-control" type="number" name="id_deportista" placeholder="id_deportista">
        <br>
          <input class="form-control" type="text" name="nombre" placeholder="nombre">
        <br>
          <input class="form-control" type="number" name="dni" placeholder="dni">
        <br>
          <button type="submit" name="button">Submit</button>
        <br>
    </form>
</div>
<?php }} ?>