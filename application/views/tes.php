  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLIENTES</h1>
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
                <h3 class="card-title">registro de clientes</h3>
                <br>
                <?php
                
                echo date('Y/m/d H:i:s');
                ?>
 <?php
   echo form_open_multipart('usuarios/logout');      
 ?>
 <div class="col-2">
   <th>
 <button type="submit" class="btn btn-danger btn-block" >salir</button>
 </th>
 <th>
 <button type="submit" class="btn btn-success btn-block" >insertar nuevo usuario</button>
 </th>


 </div>
 <?php
  echo form_close();
 ?>


              </div>
              <span class="float-right" data-toggle="tooltip" data-placement="top" title="Nuevo instituto">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertarInstituto">
                            <i class="fas fa-plus"></i> Insertar cliente
                        </button>
                    </span>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No..</th>
                    <th>primer_apellido</th>
                    <th>segundo_apellido</th>
                    <th>nombres</th>
                    <th>ci</th>
                    <th>equipo_electronico</th>
                    <th>estado_de_factura</th>
                    <th>fecha</th>
                    <th>acciones</th>
                   
                  </tr>
                  </thead>
                  <tbody>


   <?php 
   $indice=1;
   foreach($clientes->result() as $row ){
       
   ?>
               
                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->primer_apellido;?></td>
                    <td><?php echo $row->segundo_apellido;?></td>
                    <td><?php echo $row->nombres;?></td>
                    <td><?php echo $row->ci;?></td>
                    <td><?php echo $row->equipo_electronico;?></td>
                    <td><?php echo estado($row->Nro_de_factura);?></td>
                    <td><?php echo formatearfecha($row->creado);?></td>
                    <td>
                                             <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <!--<button class="btn btn-block btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></button>-->
                                                        <span data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <button type="button" class="btn btn-block btn-sm btn-warning" data-toggle="modal" data-target="#editarAutoridad<?php echo $row->Idcliente; ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                       
                                                            <!--<button class="btn btn-block btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>-->
                                                            <span data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <button type="button" class="btn btn-block btn-sm btn-danger" data-toggle="modal" data-target="#eliminarAutoridad<?php echo $row->Idcliente; ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </span>
                                                            
                                                    </div>
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
                    <th>primer_apellido</th>
                    <th>segundo_apellido</th>
                    <th>nombres</th>
                    <th>ci</th>
                    <th>equipo_electronico</th>
                    <th>estado_de_factura</th>
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

  
  