<script>
$(document).ready(function() {
    $('#attributeForm').bootstrapValidator();
});
</script>
<form id="attributeForm" method="post" class="form-horizontal"
      data-bv-message="This value is not valid"
      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <div class="form-group">
        <label class="col-sm-3 control-label">Full name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"
                   data-bv-notempty="true" data-bv-notempty-message="The first name is required and cannot be empty" />
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name"
                   data-bv-notempty="true" data-bv-notempty-message="The last name is required and cannot be empty" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Username</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="username"
                   data-bv-message="The username is not valid"
                   data-bv-notempty="true" data-bv-notempty-message="The username is required and cannot be empty"
                   data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z0-9_\.]+$" data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                   data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                   data-bv-different="true" data-bv-different-field="password" data-bv-different-message="The username and password cannot be the same as each other" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Email address</label>
        <div class="col-sm-5">
            <input class="form-control" name="email" type="email"
                   data-bv-emailaddress="true" data-bv-emailaddress-message="The input is not a valid email address" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="password"
                   data-bv-notempty="true" data-bv-notempty-message="The password is required and cannot be empty"
                   data-bv-identical="true" data-bv-identical-field="confirmPassword" data-bv-identical-message="The password and its confirm are not the same"
                   data-bv-different="true" data-bv-different-field="username" data-bv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Retype password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="confirmPassword"
                   data-bv-notempty="true" data-bv-notempty-message="The confirm password is required and cannot be empty"
                   data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="The password and its confirm are not the same"
                   data-bv-different="true" data-bv-different-field="username" data-bv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Languages</label>
        <div class="col-sm-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="english" data-bv-notempty="true" data-bv-message="Please specify at least one language you can speak" /> English
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="french" /> French
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="german" /> German
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="russian" /> Russian
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="other" /> Other
                </label>
            </div>
        </div>
    </div>
</form>