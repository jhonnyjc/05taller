
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 

   foreach($infocliente->result() as $row )
   {
    echo form_open_multipart('cliente/modificarbd');
    ?>
    <input type="hidden" name="Idcliente" value="<?php echo $row->Idcliente; ?>">

     <div class="mb-3">
         <label class="form-label">primer_apellido</label>
         <input type="text" class="form-control" name="primer_apellido" value="<?php echo $row->primer_apellido;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">segundo_apellido</label>
         <input type="text" class="form-control" name="segundo_apellido" value="<?php echo $row->segundo_apellido;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">nombres</label>
         <input type="text" class="form-control" name="nombres" value="<?php echo $row->nombres;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">ci</label>
         <input type="text" class="form-control" name="ci" value="<?php echo $row->ci;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">equipo_electronico</label>
         <input type="text" class="form-control" name="equipo_electronico" value="<?php echo $row->equipo_electronico;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">Nro_de_factura</label>
         <input type="text" class="form-control" name="Nro_de_factura" value="<?php echo $row->Nro_de_factura;?>" >
     </div>

  
  <button type="submit" class="btn btn-primary">modificar</button>

    <?php
      echo form_close();
   }
    ?>
  
    
    </div>
  </div>
</div>

