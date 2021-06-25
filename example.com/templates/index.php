	<div class="container">
	<div class="container">
	<div class="row">
		<?php
			foreach($productos as  $pan){
	  	?>
		<div class="col-sm">
			<div class="card my-2" style="width: 18rem ">
  				<img src="<?=$pan['Imagen']?>" class="card-img-top" width = "200" height="150">
  				<div class="card-body">
    				<h5 class="card-title"><?=$pan['Nombre']?></h5>
    				<p class="card-text" ><?=$pan['Precio']?></p>
					<p class="card-text" ><?=$pan['Descripcion']?></p>
    				<a href="/buscar.php?nombre=<?=$pan['ID']?>" class="btn btn-primary">Comprar</a>
					<a type="button" class="btn btn-danger" href="../eliminarproducto.php?nombre=<?=$pan['ID']?>">Eliminar</a>
                    <a type="button" class="btn btn-warning" href="http://example.com/editar_producto.php?nombre=<?=$pan['ID']?>" >Modificar</a>
  				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
	</div>
	</div>
</body>
</html>
