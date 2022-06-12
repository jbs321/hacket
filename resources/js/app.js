require('./bootstrap');

$("#email, #password").on("input", function() {
  var str = "SELECT * from users where email = '" + $('#email').val() + "' and password = '" + $('#password').val()  + "'";
  $('#query').text(str);
});