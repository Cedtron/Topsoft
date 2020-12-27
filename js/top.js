
$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$(".loadx").delay(800).fadeOut("slow");

});



// var moda = document.getElementById("myModa");


// var bt = document.getElementById("myBt");

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 

// bt.onclick = function() {
//   moda.style.display = "block";
// }
// span.onclick = function() {
//   moda.style.display = "none";
// }

// window.onclick = function(event) {
//   if (event.target == moda) {
//     moda.style.display = "none";
//   }
// } 
var nam=document.getElementById("nam").value;
var dx=document.getElementById("id").textContent;
var nx=document.getElementById("nax").textContent;

function namx(){
  
  alert("you have successfuly logged in please Refresh");
  modal.style.display = "none";
  document.getElementById("del").href="conn/bdel.php?id="+dx+"& nam="+nam+"";
  document.getElementById("edit").href="edit.php?id="+dx+"& nam="+nam+"";
  document.getElementById("post").href="post.php?nam="+nam+"";

}

// function del(){
// document.getElementById("del").setAttribute("onclick", "location.href='conn/bdel.php?id=<?php echo $send;?>;nam="+nam+";'");
// }

function edit(){
  document.getElementById().setAttribute("onclick", "location.href=''");
}




var mng="<img src='img/sunrise.png'>";
var aft="<img src='img/sun.png'>";
var nigt="<img src='img/night.png'>";

var hr= (new Date()).getHours();

var tmy
if(hr<12){
tmy="Good morning"+" "+mng+" <br/> "+ nam;

}
else if(hr>=12 && hr <=17){
tmy="Good afternoon"+" "+aft+" <br/> "+ nam;

}
else{
tmy="Good Evening"+" "+nigt+" <br/> "+ nam

;}
document.getElementById("tym").innerHTML=tmy;





$(document).ready(function () {

    
 
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');

        $( function() {
            $( "#dp" ).datepicker();
          } );

    
    });


    });
