<?php
/* Smarty version 3.1.30, created on 2017-11-04 17:38:21
  from "D:\phpStudy\WWW\PackIDE1.1\views\home\messagec\message_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd8a8d69ede4_51270764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce7f054152e2d9ad87cacbbfcb55f4f7fee8f25' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\PackIDE1.1\\views\\home\\messagec\\message_list.html',
      1 => 1509788299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd8a8d69ede4_51270764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息展示</title>
    <link rel="stylesheet" href="<?php echo CSS;?>
public/page.css"> <!--引入css分页样式-->
    <?php echo '<script'; ?>
>pageurl="?m=home&c=Messagec&a=message_list";<?php echo '</script'; ?>
> <!--设置分页跳转路径-->
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
> <!--引入jquery文件-->
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
</div>
</body>
</html><?php }
}
