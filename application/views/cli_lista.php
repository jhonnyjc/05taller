
<div class="container">
  <div class="row">
    <div class="col-md-12">

   <?php
     echo form_open_multipart('cliente/registar');
    ?>
       <button type="submit" class="btn btn-success btn-xs">registar cliente</button>
   <?php
      echo form_close();
   ?>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">primer_apellido</th>
      <th scope="col">segundo_apellido</th>
      <th scope="col">nombres</th>
      <th scope="col">ci</th>
      <th scope="col">equipo_electronico</th>
      <th scope="col">Nro_de_factura</th>
      <th scope="col">modificar</th>
      <th scope="col">eliminar</th>
    
    </tr>
  </thead>
  <tbody>
   
   <?php 
   $indice=1;
   foreach($clientes->result() as $row ){
       
   ?>

       
    <tr>
      <th scope="row"><?php echo $indice;?></th>
      <td><?php echo $row->primer_apellido;?></td>
      <td><?php echo $row->segundo_apellido;?></td>
      <td><?php echo $row->nombres;?></td>
      <td><?php echo $row->ci;?></td>
      <td><?php echo $row->equipo_electronico;?></td>
      <td><?php echo $row->Nro_de_factura;?></td>
      <td>
           <?php
              echo form_open_multipart('cliente/modificar');
           ?>
           <input type="hidden" name="Idcliente" value="<?php echo $row->Idcliente; ?>">
           <button type="submit" class="btn btn-primary btn-xs">modificar</button>
           <?php
              echo form_close();
           ?>
      </td> 
         <td>

           <?php
              echo form_open_multipart('cliente/eliminarbd');
           ?>
           <input type="hidden" name="Idcliente" value="<?php echo $row->Idcliente; ?>">
           <button type="submit" class="btn btn-danger btn-xs">eliminar</button>
           <?php
              echo form_close();
           ?>   

       </td> 
    </tr>
       <?php

       $indice++;

   }
   
      ?>

  </tbody>
</table>
    
    </div>
  </div>
</div>

