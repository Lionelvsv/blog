
$(document).ready(function(){
   $("#search").keyup(function(){
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b>Blogs information will be listed here...</b>"); 
       }else {
               $.get( "livesearch?id="+str, function( data ) {
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 

