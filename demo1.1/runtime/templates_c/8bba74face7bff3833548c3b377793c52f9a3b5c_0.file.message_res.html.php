<?php
/* Smarty version 3.1.30, created on 2017-11-04 10:04:46
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\messagec\message_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd203ea3edc7_84492876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bba74face7bff3833548c3b377793c52f9a3b5c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\messagec\\message_res.html',
      1 => 1509752900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd203ea3edc7_84492876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">
    <table border="1" align="center">
        <tr>
            <td>ID</td>
            <td>用户名</td>
            <td>邮箱</td>
            <td>操作</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['user'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
            <td><a href="?m=home&c=Messagec&a=message_updatesel&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">编辑</a>/<a href="?m=home&c=Messagec&a=message_delete&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a></td>
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
