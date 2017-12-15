var button = document.getElementById("add_track_button");
var upload=false;
button.addEventListener("click", function() {
  var parent = document.getElementById("add_tracks");
  var div_name = document.createElement("div");
  var div_duration = document.createElement("div");
  var input_name = document.createElement("input");
  var input_duration = document.createElement("input");

  parent.appendChild(div_name);
  parent.appendChild(div_duration);

  div_name.appendChild(input_name);
  div_duration.appendChild(input_duration);

  var input = document.getElementsByTagName("input");
  var div = document.getElementsByTagName("div");
  console.log("deu");
  for(var i=10;i<input.length-1;i++) {
    if(i%2==0){
      div[i].className = "add-tracks-track[]";
      input[i].setAttribute("name", "track_name[]");
      input[i].setAttribute("type", "text");
      input[i].setAttribute("class", "track_name");
      input[i].setAttribute("placeholder", "Name");
    }

    if(i%2!=0){
      div[i].className = "add-tracks-duration[]";
      input[i].setAttribute("name", "track_duration[]");
      input[i].setAttribute("type", "number");
      input[i].setAttribute("class", "track_duration");
      input[i].setAttribute("placeholder", "Duration");
    }
  }
});

$('.add_image').click(function() {
  var txt;
    var url = prompt("Enter url for your image:", "");
    if (url == null || url == "") {
        txt = "User cancelled the prompt.";
    } else {
      $('.added_image').attr("src",url);
      $('#url').attr("value",url);
    }
});
