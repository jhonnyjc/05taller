
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 
    echo form_open_multipart('equipoelectronico/agregarbd');
    ?>

     <div class="mb-3">
         <label class="form-label">nombreEquipo</label>
         <input type="text" class="form-control" name="nombreEquipo" placeholder="escriba el nombreEquipo" >
     </div>

     <div class="mb-3">
         <label class="form-label">tipo_de_servicio</label>
         <input type="text" class="form-control" name="tipo_de_servicio" placeholder="escriba el tipo_de_servicio">
     </div>

     <div class="mb-3">
         <label class="form-label">detallesdelEquipol</label>
         <input type="text" class="form-control" name="detallesdelEquipol" placeholder="escriba los detallesdelEquipol" >
     </div>

     <div class="mb-3">
         <label class="form-label">ficha</label>
         <input type="text" class="form-control" name="ficha" placeholder="escriba el ficha" >
     </div>

    

  
  <button type="submit" class="btn btn-primary">registrar</button>

    <?php
      echo form_close();
    ?>
  
    
    </div>
  </div>
</div>

