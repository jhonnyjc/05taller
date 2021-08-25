
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 

   foreach($inforepuesto->result() as $row )
   {
    echo form_open_multipart('repuesto/modificarbd');
    ?>
    <input type="hidden" name="idrepuesto" value="<?php echo $row->idrepuesto; ?>">

     <div class="mb-3">
         <label class="form-label">login</label>
         <input type="text" class="form-control" name="nombrerepuesto" value="<?php echo $row->nombrerepuesto;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">password</label>
         <input type="text" class="form-control" name="tiporepuesto" value="<?php echo $row->tiporepuesto;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">tipo</label>
         <input type="text" class="form-control" name="estadorepuesto" value="<?php echo $row->estadorepuesto;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">nombre</label>
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

