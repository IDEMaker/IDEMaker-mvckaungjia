<?php
/* Smarty version 3.1.30, created on 2017-11-05 00:45:55
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\fileupc\upload_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fdeec3a24f99_50843232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481be631b3e959f57bae703245a2c63b53b94c3f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\fileupc\\upload_list.html',
      1 => 1509791907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fdeec3a24f99_50843232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传展示</title>
    <link rel="stylesheet" href="<?php echo CSS;?>
public/page.css"><!--引入css分页样式-->
    <?php echo '<script'; ?>
>pageurl="?m=home&c=Fileupc&a=upload_list";<?php echo '</script'; ?>
><!--设置分页跳转路径-->
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
><!--引入jquery文件-->
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
><!--引入分页js配置-->
</head>
<body>
<?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
</div>
</body>
</html>
<?php }
}
