<?php
/* Smarty version 3.1.30, created on 2017-11-04 11:52:17
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\fileupc\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd3971beafa9_63179166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0afe3072ffe70a4f7ae2ec75ed683ff59c6659' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\fileupc\\index.html',
      1 => 1509707019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd3971beafa9_63179166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传首页</title>
</head>
<body>
<form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td>
                请上传文件
            </td>
            <td><input type="file" name="file[]" multiple="multiple"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
