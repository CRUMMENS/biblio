<!DOCTYPE html>
    <html lang="es">
    	<head>
    		<meta charset="UTF-8">
			<title>Listado de temas  - <?= APP_NAME ?></title>
		
    		<!-- META -->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta name="description" content="Lista de libros en <?= APP_NAME ?>">
    		<meta name="author" content="Robert Sallent">
    		
    		<!-- FAVICON -->
    		<link rel="shortcut icon" href="/favicon.ico" type="image/png">	
    		
    		<!-- CSS -->
    		<?= $template->css()?>
   		</head>
   
   		<body>
   		<?= $template->login()?>
   		<?= $template->header('Listado de temas')?>
   		<?= $template->menu()?>
   		<?= $template->breadCrumbs(['Listado de temas' => null])?>
   		<?= $template->messages()?>
   		
   		<main>
   			<h1><?= APP_NAME?></h1>
   			<h2>Lista completa de temas</h2>

		<?php if ($temas){?>
			<table class="table w100">
				<tr>
					<th>Tema</th>
					<th>Descripcion</th>
					
					<th class="centrado">Operaciones</th>
				</tr>
		
			
		<?php foreach($libros as $libro){ ?>
			<tr>
				<td><?= $tema->tema?></td>
				<td><?= $tema->descripcion?></td>
				
				<td class="centrado">
					<a href='/Libro/show/<?= $tema->id?>'>Ver</a>
   					<a href='/Libro/edit/<?= $tema->id?>'>Editar</a>
   					<a href='/Libro/delete/<?= $tema->id?>'>Borrar</a>
   				</td>
   			</tr>
   		<?php } ?>
   			</table>
   			
   			<?php }else{ ?>
   			<div class="danger p2">
   				<p>No hay temas que mostrar.</p>   			
   			</div>
   			
   			<div class="centered">
   				<a class="button" onclick= "history.back()">Atrás</a>			
   			</div>
   		<?php } ?>	
   			</main>
   			
   			<?= $template->footer()?>
   			
   		</body>	
</html>