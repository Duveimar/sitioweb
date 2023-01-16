<?php include("../template/cabecera.php");?>
<div class="col-md-5">


    <form method?="POS" enctype="multipart/form-data">
    <div class = "form-group">
    <label for="exampleInputEmail1">ID:</label>
    <input type="text" class="form-control"name="txtID" id="txtID"  placeholder="ID">
    </div>

    
    <div class = "form-group">
    <label for="exampleInputEmail1">Nombre:</label>
    <input type="text" class="form-control"name="txtNombre" id="txtNombre"  placeholder="Nombre de producto">
    </div>

    <div class = "form-group">
    <label for="exampleInputEmail1">Imagen:</label>
    <input type="text" class="form-control"name="txtNombre" id="txtNombre"  placeholder="Nombre de producto">
    </div>
    
    <div class="btn-group" role="group" aria-label="">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-warning">Modificar</button>
        <button type="button" class="btn btn-info">Cancelar</button>
    </div>
    </form>
    
    


</div>
<div class="col-md-7">
    Tablas 
</div>

<?php include("../template/pie.php");?>