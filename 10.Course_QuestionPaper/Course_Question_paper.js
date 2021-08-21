
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






/* add questions*/


function addQ(){

  var i=parseInt(document.getElementById("numQ").value)+1;
  document.getElementById("numQ").value=i;
  
  $cocode="courseCode"+i;
  $qNumber="q"+i;
  $fm="fm"+i;

  var p=document.getElementById("frm");
  var card=document.createElement("div");
  card.setAttribute("class","card mb-3");
  
  

  var cardBody=document.createElement("div");
  cardBody.setAttribute("class","card-body");

  var row=document.createElement("div");
  row.setAttribute("class","row");

  var div1=document.createElement("div");
  div1.setAttribute("class","col-md-1 col1");

  var lbl=document.createElement("label");
  lbl.setAttribute("class","form-label");

  var h=document.createElement("h4");
  h.innerHTML=i;

  var div2=document.createElement("div");
  div2.setAttribute("class","col-md-2 textarea");

  var in2=document.createElement("input");
  in2.setAttribute("class","form-control");
  in2.setAttribute("name",$cocode);
  in2.setAttribute("placeholder","CO code");
  in2.setAttribute("pattern","^[C][O][1-9]$");

  var div3=document.createElement("div");
  div3.setAttribute("class","col-md-7 textarea");

  var in3=document.createElement("input");
  in3.setAttribute("class","form-control");
  in3.setAttribute("name",$qNumber);
  in3.setAttribute("placeholder","write question here..");
  in3.setAttribute("pattern",".+");

  var div4=document.createElement("div");
  div4.setAttribute("class","col-md-2 textarea");

  var in4=document.createElement("input");
  in4.setAttribute("class","form-control");
  in4.setAttribute("name",$fm);
  in4.setAttribute("placeholder","full marks");
  in4.setAttribute("pattern","[1-5]");

  card.appendChild(cardBody);
  cardBody.appendChild(row);
  row.appendChild(div1);
    div1.appendChild(lbl);
     lbl.appendChild(h);
  row.appendChild(div2);
    div2.appendChild(in2);
  row.appendChild(div3);
    div3.appendChild(in3);
  row.appendChild(div4);
    div4.appendChild(in4);
  


  
  p.appendChild(card);
  
 
  
  



  

  

  

  

  

 


}

/*end add questions*/


