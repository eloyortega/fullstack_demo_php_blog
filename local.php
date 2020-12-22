<!doctype html>
<html>
	<head>
		<title>P3 Blog</title>
	</head>
	<body>
		<?php require_once('nav.php'); ?>
		<h1>Articles: Local News</h1>
		<?php
			$d = file_get_contents('data.json');
			$d = json_decode($d,true);

			foreach($d as $i => $o){
				if($o['cat'] == 'local'){
					echo '
						<article>
							<h2>'.$o['title'].'</h2>
							<b>By: '.$o['author'].'</b>
							<p>'.$o['article'].'</p>
						</article>
						<hr>
					';
				};
			};
		?>
<!--
		<article>
			<h2>Headline</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<hr>
-->

	</body>
</html>