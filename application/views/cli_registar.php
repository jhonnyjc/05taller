
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 
    echo form_open_multipart('cliente/agregarbd');
    ?>

     <div class="mb-3">
         <label class="form-label">primer_apellido</label>
         <input type="text" class="form-control" name="primer_apellido" placeholder="escriba el primer apellido" >
     </div>

     <div class="mb-3">
         <label class="form-label">segundo_apellido</label>
         <input type="text" class="form-control" name="segundo_apellido" placeholder="escriba el segundo apellido">
     </div>

     <div class="mb-3">
         <label class="form-label">nombres</label>
         <input type="text" class="form-control" name="nombres" placeholder="escriba los nombres" >
     </div>

     <div class="mb-3">
         <label class="form-label">ci</label>
         <input type="text" class="form-control" name="ci" placeholder="escriba el ci" >
     </div>

     <div class="mb-3">
         <label class="form-label">equipo_electronico</label>
         <input type="text" class="form-control" name="equipo_electronico" placeholder="escriba el equipo electronico" >
     </div>

     <div class="mb-3">
         <label class="form-label">Nro_de_factura</label>
         <input type="text" class="form-control" name="Nro_de_factura" placeholder="escriba el Nro de factura" >
     </div>

  
  <button type="submit" class="btn btn-primary">registrar</button>

    <?php
      echo form_close();
    ?>
  
    
    </div>
  </div>
</div>

