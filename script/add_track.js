function add () {
var parent = document.getElementById('add_tracks');
  var input_name = document.createElement("input");
  var input_duration = document.createElement("input");
  parent.appendChild(input_name);
  parent.appendChild(input_duration);
  var input = document.getElementsByTagName("input");
  for(var i=10;i<input.length-1;i++) {
    if(i%2==0){
      input[i].setAttribute("name", "track_name[]");
      input[i].setAttribute("type", "text");
      input[i].setAttribute("class", "track_name");
    }

    if(i%2!=0){
      input[i].setAttribute("name", "track_duration[]");
      input[i].setAttribute("type", "number");
      input[i].setAttribute("class", "track_duration");
    }
  }
}
