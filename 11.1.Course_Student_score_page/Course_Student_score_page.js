
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





  function showES(){
    
    document.getElementById("es").removeAttribute("hidden");
    document.getElementById("ia").setAttribute("hidden",true);
    document.getElementById("esbutton").setAttribute("disabled","disabled");
    document.getElementById("iabutton").removeAttribute("disabled");
    document.getElementById("esbutton").setAttribute("class","btn btn-info btn-sm");
    
  }

  function showIA(){
    document.getElementById("ia").removeAttribute("hidden");
    document.getElementById("es").setAttribute("hidden",true);
    document.getElementById("iabutton").setAttribute("disabled","disabled");
    document.getElementById("esbutton").removeAttribute("disabled");
    document.getElementById("iabutton").setAttribute("class","btn btn-info btn-sm");
  }

  
