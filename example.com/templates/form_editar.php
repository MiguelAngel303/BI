 <div class="container">    
            <form method="post" action="http://example.com/modificar.php?id=<?=$y['ID']?>">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" value="<?=$y['Nombre']?>" name="Nombre" placeholder="Modifica el nombre de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="text" value="<?=$y['Precio']?>" name="Precio" placeholder="Modifica el precio de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="text" value="<?=$y['Imagen']?>" name="Imagen" placeholder="Modifica el link de la imagen" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input class="form-control" type="text" value="<?=$y['Descripcion']?>" name="Descripcion" placeholder="Modifica el color" aria-label="default input example">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>    
        </div> 
</html>