
/*Navbar Functions*/
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

/*End Navbar Function*/

var p=document.getElementById("ptype").innerHTML;

if(p=="HOD"){
  document.getElementById('home').href="../HODhome.php";
}