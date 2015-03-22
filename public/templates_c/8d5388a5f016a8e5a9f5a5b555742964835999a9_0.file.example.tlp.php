<?php /* Smarty version 3.1.22-dev/16, created on 2015-03-22 19:01:20
         compiled from "/www/framework/public/../src/Templates/example.tlp" */ ?>
<?php
/*%%SmartyHeaderCode:1821413872550f0370d5ac55_68694499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d5388a5f016a8e5a9f5a5b555742964835999a9' => 
    array (
      0 => '/www/framework/public/../src/Templates/example.tlp',
      1 => 1427047267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821413872550f0370d5ac55_68694499',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/16',
  'unifunc' => 'content_550f0370e5c290_84430667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550f0370e5c290_84430667')) {
function content_550f0370e5c290_84430667 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1821413872550f0370d5ac55_68694499';
?>
Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!<?php }
}
?>