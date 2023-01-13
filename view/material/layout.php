<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
	<title><?php e($title . ' - ' . config('site_name')); ?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mdui/1.0.2/js/mdui.min.js" integrity="sha512-LBh0vC8hNru7991yk7vBb3tiBCU41shGOowGRnLqz63KYedvNQOyGOKHnl/pHSRYJ2P45bjzALArvDDHSSc2KA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdui/1.0.2/css/mdui.min.css" integrity="sha512-Hh2syGXSuZabqBNcdvPiGo67ASyKhlKTZV9lLOmJp10qZ1v8/YPeuZBoOh0WmS/UPwWtRzQhNJfYyKDAhdGocQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.mdui-appbar .mdui-toolbar {
			height: 56px;
			font-size: 16px;
		}

		.mdui-toolbar>* {
			padding: 0 6px;
			margin: 0 2px;
			opacity: 0.5;
		}

		.mdui-toolbar>.mdui-typo-headline {
			padding: 0 16px 0 0;
		}

		.mdui-toolbar>i {
			padding: 0;
		}

		.mdui-toolbar>a:hover,
		a.mdui-typo-headline,
		a.active {
			opacity: 1;
		}

		.mdui-container {
			max-width: 980px;
		}

		.mdui-list-item {
			-webkit-transition: none;
			transition: none;
		}

		.mdui-list>.th {
			background-color: initial;
		}

		.mdui-list-item>a {
			width: 100%;
			line-height: 48px
		}

		.mdui-list-item {
			margin: 2px 0px;
			padding: 0;
		}

		.mdui-toolbar>a:last-child {
			opacity: 1;
		}

		@media screen and (max-width:980px) {
			.mdui-list-item .mdui-text-right {
				display: none;
			}

			.mdui-container {
				width: 100% !important;
				margin: 0px;
			}

			.mdui-toolbar>* {
				display: none;
			}

			.mdui-toolbar>a:last-child,
			.mdui-toolbar>.mdui-typo-headline,
			.mdui-toolbar>i:first-child {
				display: block;
			}
		}
	</style>
</head>

<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="mdui-appbar mdui-color-theme">
		<div class="mdui-toolbar mdui-container">
			<a href="/" class="mdui-typo-headline"><?php e(config('site_name')); ?></a>
			<?php foreach ((array)$navs as $n => $l) : ?>
				<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
				<a href="<?php e($l); ?>"><?php e($n); ?></a>
			<?php endforeach; ?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
	</header>

	<div class="mdui-container">
		<?php view::section('content'); ?>
	</div>
</body>

</html>