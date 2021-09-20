<?php
/* Smarty version 3.1.36, created on 2021-09-19 05:51:04
  from 'C:\xampp\htdocs\php\php_basic_to_advanced\smarty_test\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6146b3a8ded344_40243948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cead8ae8b072e6539f22baef2d5fab7b2fd56046' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php_basic_to_advanced\\smarty_test\\view\\index.tpl',
      1 => 1632023426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6146b3a8ded344_40243948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php\\php_basic_to_advanced\\smarty_test\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
Hello
<br />
<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver, gray'),$_smarty_tpl);?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</td>
    </tr> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
