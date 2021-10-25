
<section class="text-center my-5">
  <div class="banner-info">
    <h2 style="color: #2a6f7a; text-transform: uppercase;"><?php echo $_GET["var3"]; ?></h2>
      <center>
        <table id="dtBasicExampl" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" style="color: black;">
      <thead>
          <tr >  
            <th><B>DESCRIPCIÓN</B></th>
            <th><B>VALOR</B></th>
          </tr>

      </thead>
          
          <tbody>
                        
            <?php

              $farma = new FarmaController();
              $farma -> vistaUsuariosControllerr();
                   
            ?>

          </tbody>

        </table>

      </center>
  </div>    
</section> 

<script type="text/javascript">

  $(document).ready(function () {
  $('#dtBasicExampl').DataTable();
  $('.dataTables_length').addClass('bs-select');
  });

</script> 

