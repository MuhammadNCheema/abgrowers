// JavaScript Document
//$("#send").click(
function mail()
{
	
txtsub=$("#txtsub").val();
name=$("#txtname").val();
email=$("#txtemail").val();
msg=$("#txtmsg").val();
btn=$("#send").val();
	if((txtsub=='')||(name=='')||(email=='')||(msg==''))
	{
document.getElementById("msg1").innerHTML="<div style='color:#ff0d0d !important;'>Plz fill all the boxes first</div>";
	}
	else
	{
		document.getElementById("msg1").innerHTML="<div style='color:#2c5600 !important;'>Just wait for a second......</div>";
		setTimeout(function(){
		document.getElementById("msg1").innerHTML="email sent successfully";
		},8000);
		
	$.ajax({
    url: "mail.php",
    type: "POST",
    data: { txtsub: txtsub , txtname : name , txtemail : email , txtmsg : msg , send : btn },
      success: function(data){
         $('').html(data);
		$(',').hide();
				
    }
	
});}
}