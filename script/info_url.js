

$('.listed_album').click(function(){
  var album_name = document.getElementsByClassName("listed_album_name");
  $("a").attr("href", "album_page.php?id="+getQueryVariable("id")+"&album_name="+String(album_name[$('.listed_album').index(this)].innerText));
});

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
