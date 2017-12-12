var classname = document.getElementsByClassName("operation_checkbox");
var check_selected = null;

var myFunction = function() {
  for (var i = 0; i < classname.length; i++) {
    var attribute = classname[i].checked;
    if(classname[i].checked==true) {
      check_selected == i;
    }
  }
  console.log(check_selected);
};

for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', myFunction, false);
}
