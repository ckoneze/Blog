<!-- jQuery 3 -->
<script src="admin-template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin-template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="admin-template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="admin-template/bower_components/raphael/raphael.min.js"></script>
<script src="admin-template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="admin-template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="admin-template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="admin-template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin-template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin-template/bower_components/moment/min/moment.min.js"></script>
<script src="admin-template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="admin-template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="admin-template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="admin-template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin-template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin-template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin-template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin-template/dist/js/demo.js"></script>

<script>
$('#EditCategory').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('category_id_edit')
  var title = button.data('category_title_edit')
  var cat_desc_edit = button.data('cat_desc_edit')
  var cat_slug_edit = button.data('cat_slug_edit')
  var cat_priority_edit = button.data('cat_priority_edit')
  var cat_date_edit = button.data('cat_date_edit')
    
  var modal = $(this)
  modal.find('.modal-body #cat_id_edit').val(id);
  modal.find('.modal-body #cat_title_edit').val(title);
  modal.find('.modal-body #cat_desc_edit').val(cat_desc_edit);
  modal.find('.modal-body #cat_slug_edit').val(cat_slug_edit);
  modal.find('.modal-body #cat_priority_edit').val(cat_priority_edit);
  modal.find('.modal-body #cat_date_edit').val(cat_date_edit);

})

 $('#DeleteCategory').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var category_id_delete = button.data('category_id_delete') // Extract info from data-* attributes

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body #category_id_delete').val(category_id_delete);

 // modal.find('.modal-body ozakadrzave').val(ozakadrzave)
}) 
</script>

<script>
            $('#selectAllCategoryCheckbox').click(function(event) {   
          if(this.checked) {
              // Iterate each checkbox
              $(':checkbox').each(function() {
                  this.checked = true;                        
              });
          } else {
              $(':checkbox').each(function() {
                  this.checked = false;                       
              });
          }
      });
  </script>