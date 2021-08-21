
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


function addco(){
  var i=parseInt(document.getElementById("numCO").value)+1;
  document.getElementById("numCO").value=i;
  var coName="CO"+i;
  var coText="COtext"+i;


  var p=document.getElementById("frm");
  var card=document.createElement("div");
  card.setAttribute("class","card");

  var cb=document.createElement("div");
  cb.setAttribute("class","card-body");

  var row=document.createElement("div");
  row.setAttribute("class","row");

  var div1=document.createElement("div");
  div1.setAttribute("class","col-md-1 col1");

  var h=document.createElement("h4");
  h.setAttribute("class","card-title");
  h.innerHTML=coName;

  div1.appendChild(h);

  var div2=document.createElement("div");
  div2.setAttribute("class","col-md-11 textarea");

  var in1=document.createElement("input");
  in1.setAttribute("class","form-control");
  in1.setAttribute("name",coText);

  div2.appendChild(in1);

  row.appendChild(div1);
  row.appendChild(div2);

  cb.appendChild(row);
  card.appendChild(cb);

  p.appendChild(card);


 




}