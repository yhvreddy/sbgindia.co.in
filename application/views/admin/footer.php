<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <!-- <a href="https://adminlte.io">AdminLTE</a> -->.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?=base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('Information1');
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5();
    })
  </script>
<script>
  $(function () {
    $('.DataTable').DataTable()
    $('.datatable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'columnDefs': [{ 'orderable': false, 'targets': 0 }], // hide sort icon on header of firstcolumn
	  'aaSorting': [[1]] // start to sort data in second column
    })
  });

  $(document).ready(function() {
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });

    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });

  });
</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
</script>

</body>
</html>
