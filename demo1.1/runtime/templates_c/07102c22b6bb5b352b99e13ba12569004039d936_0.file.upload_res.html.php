<?php
/* Smarty version 3.1.30, created on 2017-11-04 17:44:02
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\fileupc\upload_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd8be218bd72_79375859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07102c22b6bb5b352b99e13ba12569004039d936' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\fileupc\\upload_res.html',
      1 => 1509697515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd8be218bd72_79375859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">
    <table border="1" align="center">
        <tr>
            <td>ID</td>
            <td>图片</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td><img src="<?php echo APP_UPLOAD;
echo $_smarty_tpl->tpl_vars['v']->value['path_name'];?>
" alt="" width="100px" height="100px"></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <p align="center">
        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    </p>
</div><?php }
}
