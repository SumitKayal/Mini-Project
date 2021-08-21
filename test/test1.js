function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }


   
  function addCourseOutcome(){
    var i=parseInt(document.getElementById("numCO").value)+1;
    document.getElementById("numCO").value=i;

    var p=document.getElementById("frm");
    var c=document.createElement("div");
    var c1=document.createElement("div");
    var h=document.createElement("h5");
    var in1=document.createElement("input");
    h.innerText="CO"+i;
    var idName="card"+i;
    var inputName="name"+i;
    c.setAttribute("id",idName);
    c.setAttribute("class","card");
    c1.setAttribute("class","card-body");
    h.setAttribute("class","card-title");
    in1.setAttribute("name",inputName);
    c1.appendChild(h);
    c1.appendChild(in1);
    c.appendChild(c1);
    p.appendChild(c);
   
    

  }