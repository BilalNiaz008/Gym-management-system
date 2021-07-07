function openNav() {
  document.getElementById("mysidebar").style.width = "19%";
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("main").style.width="80%";
  document.getElementById("openbtn").style.visibility="hidden";
  document.getElementById("closebtn").style.visibility="visible";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {

  document.getElementById("mysidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("main").style.width="100%";
  document.getElementById("closebtn").style.visibility="hidden";
  document.getElementById("openbtn").style.visibility="visible";
}


	var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
