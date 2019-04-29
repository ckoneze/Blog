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
$('#EditUser').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('user_id_edit')
  var name = button.data('user_name_edit')
  var username = button.data('user_username_edit')
  var email = button.data('user_email_edit')
  var image_user = button.data('user_image_edit')
  var type = button.data('user_type_edit')
  var gender = button.data('user_gender_edit')
  var password = button.data('user_password_edit')
  //var user_image = button.data('user_image_edit')
  //var type1 = button.data('user_type_edit_select')
  if(type == 0) {
    document.getElementById("p1").innerHTML ='<label for="user_type" class="col-form-label"> User type:</label>'+
                      '<select class="form-control" id="user_type_edit_select" name="user_type_edit_select">'+
                    '<option value="" disabled>Select...</option>'+
                    '<option value="0" selected>User</option>'+
                    '<option value="1">Administrator</option>'+
                  '</select>';

  } else {
    document.getElementById("p1").innerHTML = '<label for="user_type" class="col-form-label"> User type:</label>'+
                      '<select class="form-control" id="user_type_edit_select" name="user_type_edit_select">'+
                    '<option value="" disabled>Select...</option>'+
                    '<option value="0" >User</option>'+
                    '<option value="1" selected>Administrator</option>'+
                  '</select>';
  }

  if(gender == 1) {
    document.getElementById("p2").innerHTML ='<label for="cat_title" class="col-form-label"> Gender:</label><br>'+
                  '<label><input type="radio" name="user_gender_edit" id="user_gender_edit" value="1" checked> <i class="fa fa-female"aria-hidden="true"></i></label>'+
                  '<label><input type="radio" name="user_gender_edit" id="user_gender_edit" value="2"> <i class="fa fa-male" aria-hidden="true"></i></label>';

  } else {
    document.getElementById("p2").innerHTML = '<label for="cat_title" class="col-form-label"> Gender:</label><br>'+
                  '<label><input type="radio" name="user_gender_edit" id="user_gender_edit" value="1"> <i class="fa fa-female"aria-hidden="true"></i></label>'+
                  '<label><input type="radio" name="user_gender_edit" id="user_gender_edit" value="2" checked> <i class="fa fa-male" aria-hidden="true"></i></label>';
  }
  document.getElementById("user_name_write").innerHTML ='<h3 class="profile-username text-center">' + name +'</h3>';
    
  var modal = $(this)
  modal.find('.modal-body #user_id_edit').val(id);
  modal.find('.modal-body #user_name_edit').val(name);
  modal.find('.modal-body #user_username_edit').val(username);
  modal.find('.modal-body #user_email_edit').val(email);
  modal.find('.modal-body #user_type_edit').val(type);
  modal.find('.modal-body #user_gender_edit').val(gender);
  modal.find('.modal-body #user_password_edit').val(password);
  modal.find('.modal-body #confirm_password_edit').val(password);
  modal.find('.modal-body #user_image_edit').val(image_user);

  modal.find('.modal-body #testg').val(gender);
  //modal.find('.modal-body #user_name_write').val(name);
 //modal.find('.modal-body #t').val(type1);
 mouseOverUser(this);
})



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

$('#DeletePost').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var post_id_delete = button.data('post_id_delete') // Extract info from data-* attributes

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body #post_id_delete').val(post_id_delete);

 // modal.find('.modal-body ozakadrzave').val(ozakadrzave)
})

$('#EditPost').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('post_id_edit')
  var category = button.data('post_category_edit')
  var title = button.data('post_title_edit')
  var autor = button.data('post_autor_edit')
  var date = button.data('post_date_edit')
  var editdate = button.data('post_edit_date_edit')
  var image = button.data('post_image_edit')
  var text = button.data('post_text_edit')
  var tag = button.data('post_tag_edit')
  var visit = button.data('post_visit_counter_edit')
  var status = button.data('post_status_edit')
  var priority = button.data('post_priority_edit')
  

      
  var modal = $(this)
  modal.find('.modal-body #post_id_edit').val(id);
  modal.find('.modal-body #post_category_edit').val(category);
  modal.find('.modal-body #post_title_edit').val(title);
  modal.find('.modal-body #post_autor_edit').val(autor);
  modal.find('.modal-body #post_date_edit').val(date);
  modal.find('.modal-body #post_edit_date_edit').val(editdate);
  modal.find('.modal-body #post_image_edit1').val(image);
  modal.find('.modal-body #post_text_edit').val(text);
  modal.find('.modal-body #post_tag_edit').val(tag);
  modal.find('.modal-body #post_visit_counter_edit').val(visit);
  modal.find('.modal-body #post_status_edit').val(status);
  modal.find('.modal-body #post_priority_edit').val(priority);
  var slikazaprikaz = document.getElementById("post_image_edit1").value; 
  //document.getElementById('foo').innerHTML = '<img src="images/blog" + image/>';
//document.getElementById('foo').innerHTML = '<img src="img/apple_' + image 'id="imageBox"/>';

mouseOver(this); //LOAD IMAGE

   CKEDITOR.instances['post_text_edit'].setData(text)

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
  
  <script>
            $('#selectAllCommentCheckbox').click(function(event) {   
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


  <script>
  var password = document.getElementById("user_password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

 <script>
  var password_edit = document.getElementById("user_password_edit")
  , confirm_password_edit = document.getElementById("confirm_password_edit");

function validatePassword_edit(){
  if(password_edit.value != confirm_password_edit.value) {
    confirm_password_edit.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password_edit.setCustomValidity('');
  }
}

password_edit.onchange = validatePassword_edit;
confirm_password_edit.onkeyup = validatePassword_edit;
</script>
 <!-- /.show pass 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

<script type="text/javascript">
  //$("#user_password_edit").password('toggle');
  //$("#confirm_password_edit").passwordconfirm('toggle');
</script>
<script type="text/javascript">
  
 // $("#confirm_password_edit").password('toggle');
</script>-->