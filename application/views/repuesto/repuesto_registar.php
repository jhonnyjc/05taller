
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 
    echo form_open_multipart('repuesto/agregarbd');
    ?>

     <div class="mb-3">
         <label class="form-label">nombrerepuesto</label>
         <input type="text" class="form-control" name="nombrerepuesto" placeholder="escriba el nombrerepuesto" >
     </div>

     <div class="mb-3">
         <label class="form-label">tiporepuesto</label>
         <input type="text" class="form-control" name="tiporepuesto" placeholder="escriba el tiporepuesto">
     </div>

     <div class="mb-3">
         <label class="form-label">estadorepuesto</label>
         <input type="text" class="form-control" name="estadorepuesto" placeholder="escriba estadorepuesto" >
     </div>

     <div class="mb-3">
         <label class="form-label">ficha</label>
         <input type="text" class="form-control" name="ficha" placeholder="escriba ficha" >
     </div>

     

  
  <button type="submit" class="btn btn-primary">registrar</button>

    <?php
      echo form_close();
    ?>
  
    
    </div>
  </div>
</div>

