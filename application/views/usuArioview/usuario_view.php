    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>USUARIOS</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">registro de usuarios</h3>
                <br>
                <?php
                
                echo date('Y/m/d H:i:s');
                ?>
 <?php
   echo form_open_multipart('cliente/tes');      
 ?>
 <div class="col-2">
 
 <button type="submit" class="btn btn-danger btn-block" >salir</button>
 
 </div>
 <?php
  echo form_close();
 ?>


 <?php
     echo form_open_multipart('cliente/registar');
    ?>
  
    <span class="float-right">
      <button type="submit" class="btn btn-primary btn-block"> <i class="fas fa-plus"></i> Insertar nuevo usuario</button>
      </span>
  
   <?php
      echo form_close();
   ?>
   <br><br>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No..</th>
                    <th>login</th>
                    <th>password</th>
                    <th>tipo</th>
                    <th>apellido paterno</th>
                    <th>apellido materno</th>
                    <th>nombre</th>
                    <th>ci</th>
                    <th>celular</th>
                    <th>direccion</th>
                    <th>fecha</th>
                    <th>acciones</th>
                   
                  </tr>
                  </thead>
                  <tbody>


   <?php 
   $indice=1;
   foreach($usuarios->result() as $row ){
       
   ?>
               
                <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->login;?></td>
                    <td><?php echo $row->password;?></td>
                    <td><?php echo $row->tipo;?></td>
                    <td><?php echo $row->nombre;?></td>
                    <td><?php echo $row->apellidoPaterno;?></td>
                    <td><?php echo $row->apellidoMaterno;?></td>
                    <td><?php echo $row->ci;?></td>
                    <td><?php echo $row->celular;?></td>
                    <td><?php echo $row->direccion;?></td>
                    <td><?php echo formatearfecha($row->fecha);?></td>
                    <td>

                <div class="row">
                    <div class="col-md-6 col-6">
                      <?php
                     echo form_open_multipart('usuarios/modificar');
                     ?>
                     <span data-toggle="tooltip" data-placement="top" title="Editar">
                          <input type="hidden" name="Idcliente" value="<?php echo $row->IdUsuarios; ?>">
                           <button type="submit" class="btn btn-block btn-sm btn-warning">
                                   <i class="fas fa-edit"></i>
                           </button>
                    </span>
                  </div>

                    <?php
                    echo form_close();
                   ?>
              
              <div class="col-md-6 col-6">
                <?php
                echo form_open_multipart('cliente/eliminarbd');
                 ?>
                 <span data-toggle="tooltip" data-placement="top" title="Eliminar">
                 <input type="hidden" name="Idcliente" value="<?php echo $row->IdUsuarios; ?>">
                       <button type="submit" class="btn btn-block btn-sm btn-danger">
                           <i class="fas fa-trash-alt"></i>
                       </button>
                 </span>
                 </div>
              <?php
                echo form_close();
                ?> 
             </div>
                </td>   
                
              </tr>

 <?php

$indice++;

}

?>


                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No..</th>
                    <th>login</th>
                    <th>password</th>
                    <th>tipo</th>
                    <th>apellido paterno</th>
                    <th>apellido materno</th>
                    <th>nombre</th>
                    <th>ci</th>
                    <th>celular</th>
                    <th>direccion</th>
                    <th>fecha</th>
                    <th>acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  