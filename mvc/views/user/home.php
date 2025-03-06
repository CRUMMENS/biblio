<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>home - <?= APP_NAME ?></title>
		
		<!-- META -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Listado de temas <?= APP_NAME ?>">
		<meta name="author" content="Robert Sallent">
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/png">	
		
		<!-- CSS -->
		<?= $template->css() ?>
	</head>
	<body>
		<?= $template->login() ?>
		<?= $template->header('HOME') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["home" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	
	<main>
		<h1><?= APP_NAME?></h1>
		
		
		<section class="flex-container" id="user-data">
		
			<div class="flex2">
			
				<h2><?= "Home de $user->displayname" ?></h2>
				
				<p><b>Nombre:</b>           	<?= $user->displayname ?></p>
				<p><b>Email:</b>           		<?= $user->email ?></p>
				<p><b>Telefono:</b>           	<?= $user->phone ?></p>
				<p><b>Fecha de alta:</b>        <?= $user->create_at ?></p>
				<p><b>Última modificación:</b>  <?= $user->updated_at ?? '--' ?></p>
			
			</div>
			
			<!-- Si queremos añadir fotos de perfil para los usuarios : FL12 pag50 -->

		</section>
		
		</main>
	</body>
</html>