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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registros</li>
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
                <h3 class="card-title">registro nuevo usuario</h3>
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
                    <th>login</th>
                    <th>password</th>
                    <th>tipo</th>
                    <th>acciones</th>
                    <th>fecha</th>
                 
                  </tr>
                  </thead>
                  <tbody>


   <?php 
   $indice=1;
   foreach($clientes->result() as $row ){
       
   ?>
               
                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->login;?></td>
                    <td><?php echo $row->password;?></td>
                    <td><?php echo $row->tipo;?></td>
                    <td><?php echo formatearfecha($row->creado);?></td>
                    
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
                    <th>acciones</th>
                    <th>fecha</th>
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