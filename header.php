<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
	<link href="<?php $this->options->themeUrl('css/kico.css'); ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php $this->options->themeUrl('css/tnl.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/core.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
	<script type="text/javascript">
        $(function(){
            $(".menulist").hide();
            $(".menubtn").click(function(){
                $(".menulist").not($(this).next()).hide();
                $(".menubtn").not($(this).next()).removeClass("current");
                $(this).next().slideToggle(500);
                $(this).toggleClass("current");
            });
        });
    </script>
</head>
<body>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/core.js"></script>
	<header>
	<div class="container wrap min head-bar">
		<div class="row thin">
			<div class="col-10">
				<a class="head-title"><?php $this->options->title() ?></a>
			</div>
			<div class="col-2 menubtn">
				<a class="head-menu fa fa-bars"></a>
			</div>
		</div>
	</div>
	<div class="menulist container wrap min">
		<ul class="clear">
			<li>首页</li>
			<li>分类</li>
			<ul>
				<li>搞基教程</li>
				<li>网络资源</li>
				<li>测试分类</li>
				<li>测试分类</li>
				<li>测试分类</li>
			</ul>
		</ul>
	<div>
	</header>