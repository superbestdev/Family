      </div>
    <!-- /#wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/smalot-bootstrap-datetimepicker/2.4.3/js/bootstrap-datetimepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://malsup.github.com/jquery.form.js" ></script>

  <!-- Custom JS -->
  <script type="text/javascript" src="<?= base_url('assets/js/schedule/modernizr.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/html2canvas.js');?>"></script> 
  <?php if ($title == 'Edit Profile') { ?>
    <script type="text/javascript" src="<?= base_url('assets/js/dropzone.js');?>"></script>  
  <?php }else{ ?>
    <script type="text/javascript" src="<?= base_url('assets/js/dropzone/dropzone.js');?>"></script>  
  <?php } ?>  
  <script type="text/javascript" src="<?= base_url('assets/js/schedule/main.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/tablesorter/jquery.tablesorter.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/tablesorter/jquery.tablesorter.widgets.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/tablesorter/jquery.tablesorter.pager.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/js.js');?>"></script> 
</body>
</html>