//Browser Support Code
function insertVelejums(){
   var ajaxRequest;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
      
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
         
            // Something went wrong
            alert("Pārliecinies vai ar pārlūkprogrammu viss kārtībā!!");
            return false;
         }
      }
   }
   
   // Create a function that will receive data
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function(){
         if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
         var ajaxDisplay = document.getElementById('success_message');
         //ajaxDisplay.innerHTML = ajaxRequest.responseText;
		 document.getElementById("velejums_submit_btn").textContent="Jūsu vēlējums ir saņemts!";
		 document.getElementById("velejums_submit_btn").style.backgroundColor="#A5FF4D";
		 
		 
      }
   }
   
   // Now get the value from user and pass it to
   // server script.
   var autors = document.getElementById('velejums_autors').value;
   var velejums = document.getElementById('velejums_autors_teksts').value;
   var queryString = "vel_autors=" + autors ;
      queryString +=  "&vel_teksts=" + velejums;
	  
   ajaxRequest.open("POST", "getVelejums.php", true);        
   ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajaxRequest.send(queryString); 
}
//Aizver popup un atiestata tukšas vērtības
function close_popup(){
e = document.getElementById("velejumsPopuBoxPosition");
			       if(e.style.display == 'block')
				   {
				   e.style.display = 'none';
				   }
			    

document.getElementById('velejums_autors').value="";
document.getElementById('velejums_autors_teksts').value="";
document.getElementById("velejums_submit_btn").textContent="Iesniegt";
document.getElementById("velejums_submit_btn").style.backgroundColor="#940606";
}
//pārbaudam vai 