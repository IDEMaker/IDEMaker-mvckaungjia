<?php
/* Smarty version 3.1.30, created on 2017-11-04 11:22:08
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\messagec\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd32602d7977_90031307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd30ab8a0a4f9d0dd2c4803361a34f7c311237e81' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\messagec\\index.html',
      1 => 1509707460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd32602d7977_90031307 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息注册</title>
</head>
<body>
<form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
 <table border="1" align="center">
     <tr>
        <td>用户名</td>
         <td><input type="text" name="user"></td>
     </tr>
     <tr>
         <td>密码</td>
         <td><input type="password" name="pwd"></td>
     </tr>
     <tr>
         <td>邮箱</td>
         <td><input type="email" name="email"></td>
     </tr>
     <tr>
         <td colspan="2" align="center"><input type="submit" value="注册"></td>
     </tr>
 </table>
</form>
</body>
</html><?php }
}
