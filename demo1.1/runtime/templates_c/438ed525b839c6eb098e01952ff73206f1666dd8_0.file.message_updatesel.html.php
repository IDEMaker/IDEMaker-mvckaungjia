<?php
/* Smarty version 3.1.30, created on 2017-11-04 10:04:56
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\messagec\message_updatesel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd20487a4ed4_08785700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '438ed525b839c6eb098e01952ff73206f1666dd8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\messagec\\message_updatesel.html',
      1 => 1509753848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd20487a4ed4_08785700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息修改</title>
</head>
<body>
<form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
    <table border="1" align="center">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'];?>
"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd" placeholder="请输入新密码" value=""></td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="注册"></td>
        </tr>
    </table>
    <input type="hidden"  name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
</form>
</body>
</html><?php }
}
