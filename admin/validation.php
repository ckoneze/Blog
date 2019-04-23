<form class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" placeholder="Password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>
    </fieldset>
</form>
<script>
  var password = document.getElementById("password")
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