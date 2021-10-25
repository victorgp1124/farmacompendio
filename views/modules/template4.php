
<section class="text-center my-5">
  <div class="banner-info">
    <h1><?php echo $_POST["principle"]; ?></h1>
      <center>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" align="center">
          <thead>
          <tr>
            <th><B>Descripcion</B></th>
            <th><B>Valor</B></th>
          </tr>
        </thead>
          <tbody>
                        
            <?php

              $farma = new FarmaController();
              $farma -> buscarController();
                   
            ?>

          </tbody>

        </table>

      </center>
  </div>    
</section> 

<script type="text/javascript">

  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
  
</script> 