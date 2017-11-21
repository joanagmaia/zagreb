document.getElementById("username").innerHTML = localStorage.getItem("username");

$( "#logout" ).click(function() {
  localStorage.setItem("username","");
  document.getElementById("username").innerHTML = localStorage.getItem("username");
});
