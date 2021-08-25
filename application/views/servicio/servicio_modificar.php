
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 

   foreach($infousuario->result() as $row )
   {
    echo form_open_multipart('usuarios/modificarbd');
    ?>
    <input type="hidden" name="IdUsuarios" value="<?php echo $row->IdUsuarios; ?>">

     <div class="mb-3">
         <label class="form-label">login</label>
         <input type="text" class="form-control" name="login" value="<?php echo $row->login;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">password</label>
         <input type="text" class="form-control" name="password" value="<?php echo $row->password;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">tipo</label>
         <input type="text" class="form-control" name="tipo" value="<?php echo $row->tipo;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">nombre</label>
         <input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">apellidoPaterno</label>
         <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo $row->apellidoPaterno;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">apellidoMaterno</label>
         <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo $row->apellidoMaterno;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">ci</label>
         <input type="text" class="form-control" name="ci" value="<?php echo $row->ci;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">celuar</label>
         <input type="text" class="form-control" name="celuar" value="<?php echo $row->celuar;?>" >
     </div>

     <div class="mb-3">
         <label class="form-label">direccion</label>
         <input type="text" class="form-control" name="direccion" value="<?php echo $row->direccion;?>" >
     </div>

  
  <button type="submit" class="btn btn-primary">modificar</button>

    <?php
      echo form_close();
   }
    ?>
  
    
    </div>
  </div>
</div>

