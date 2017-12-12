var check = document.getElementsByClassName('operation_checkbox');
var button = document.getElementById("remove-album");
var list = document.getElementById('remove-form');
var input = document.getElementsByTagName("input");
var remove_in = document.getElementsByClassName("remove-input");
var checked_array=[];

var add_check = function() {
  for(var i = 0; i < check.length; i++) {
    if(check[i].checked==true && checked_array.indexOf(i)<0) {
      checked_array.push(i);
      var input_remove = document.createElement("input");
      list.insertBefore(input_remove, list.childNodes[0]);
      input_remove.setAttribute("name", "remove-input[]");
      input_remove.setAttribute("type", "text");
      input_remove.setAttribute("class", "remove-input");
      input_remove.setAttribute("value",i);

    }
    if(check[i].checked==false && checked_array.indexOf(i)>=0) {
      for(var j=0;j<remove_in.length;j++) {
        console.log(remove_in[j].value);
        if(remove_in[j].value==i) {
          list.removeChild(remove_in[j]);
        }
      }
      checked_array.pop(i);
    }
  }
}
console.log(checked_array);

this.addEventListener('click', add_check);
