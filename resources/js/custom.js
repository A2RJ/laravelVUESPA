var header = document.getElementById("sidebarnav");
var li = header.getElementsByClassName("sidebar-item");
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("selected");
  current[0].className = current[0].className.replace(" selected", "");
  this.className += " selected";
  // this.className.addClass('selected')
  });
}
