<?php include "menu.php"; ?>
<style type="text/css">
  .banner{
  padding-top: 150px;
    padding-left: 200px;
}
</style>
<section class="text-center my-5">
  <div class="banner">
    <center>  
    <?php
        $farma = new CrudController();
        $farma -> editarEspecialidadController();
        $farma -> actualizarEspecialidadController();
        $farma -> insertarEspecialidadController();
        
       
     ?>
    </center>  
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModalC" >Nueva Especialidad</button>
      <center>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" style="color: black;">
      <thead>
          <tr >  
            <th><B>ID</B></th>
            <th><B>NOMBRES</B></th>
            <th><B>DESCRIPCION</B></th>
            <th><B></B></th>
            <th><B></B></th>

          </tr>

      </thead>
          
          <tbody>
                        
            <?php

              $farma = new CrudController();
              $farma -> vistaEspecialidadController();
              $farma -> borrarEspecialidadController();  
                   
            ?>

          </tbody>

        </table>

      </center>
  </div>    
</section> 

<div class="modal fade" id="myModalC" role="dialog">
  <div class="modal-dialog">
          <!-- Modal content-->
    <div class="modal-content">
                                
      <div class="modal-header bg-purplepage" style="color:#FFFFFF;">
             <h5><strong>Crear Especialidad</strong></h5> 
            </div>
              
    <div class="modal-body">
              
      <form method="POST" enctype="multipart/form-data">
    <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right"><font face="Candara" size="4" class="card-text" >Nombre:</font></label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombreEs" required>
            </div>
        </div>

         <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right"><font face="Candara" size="4" class="card-text" >Descripción:</font></label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="descripcionEs" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right"><font face="Candara" size="4" class="card-text" >Foto:</font></label>
            <div class="col-md-6">
                <input type="file" class="form-control" name="fotoEs" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                 <button type="submit" class="botoncomi botonescomi1">Crear especialidad</button>
            </div>
        </div>
      </form>

    </div>

            <div class="modal-footer">
              <button type="button" class="botonbol botonesbol" data-dismiss="modal">Cerrar</button>
            </div>
    </div>  
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script> 