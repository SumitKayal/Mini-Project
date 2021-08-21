
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


function validation(){
  var count=0;
  for(var i=1;i<=3;i++){
    var id="c"+i;
      if(document.getElementById(id).value!="selcourse"){
        count++;
      }
  }
  if(count==0){
    alert("Please select atleast one course");
    return false;
  }
  else if(document.getElementById("prof").value=="selprof"){
    alert("Please select Professor Name");
    return false;
  }

  return true;

}