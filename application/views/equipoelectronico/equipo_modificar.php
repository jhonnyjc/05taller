
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 

   foreach($infoequipo->result() as $row )
   {
    echo form_open_multipart('equipoelectronico/modificarbd');
    ?>
    <input type="hidden" name="idequipoelectronico" value="<?php echo $row->idequipoelectronico; ?>">

     <div class="mb-3">
         <label class="form-label">nombreEquipo</label>
         <input type="text" class="form-control" name="nombreEquipo" value="<?php echo $row->nombreEquipo;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">tipo_de_servicio</label>
         <input type="text" class="form-control" name="tipo_de_servicio" value="<?php echo $row->tipo_de_servicio;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">detallesdelEquipol</label>
         <input type="text" class="form-control" name="detallesdelEquipol" value="<?php echo $row->detallesdelEquipol;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">ficha</label>
         <input type="text" class="form-control" name="ficha" value="<?php echo $row->ficha;?>" >
     </div>

     
  
  <button type="submit" class="btn btn-primary">modificar</button>

    <?php
      echo form_close();
   }
    ?>
  
    
    </div>
  </div>
</div>

