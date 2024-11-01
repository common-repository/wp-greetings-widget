function grtngs_time() {
    var currentdate = new Date(); 
	var hour = currentdate.getHours();
	var message="";
	var image="";
    
	if(hour<12 && hour >0)
	{
		message="Good Morning";
		image="good_morning.jpg";
	}
	else if(hour==12)
	{
		message="Good Noon";
		image="good_noon.jpg";
	}
	else if(hour<18 && hour >12)
	{
		message="Good afternoon";
		image="good_afternoon.jpg";
	}
	else if(hour<20 && hour >18)
	{
		message="Good Evening";
		image="good_evening.jpg";
	}
	else
	{
		message="Good Night";
		image="good_night.jpg";
	}
	var temp=document.getElementById("grtngs_img").src;
	document.getElementById("grtngs_img").src=temp+image;
	$("#grtngs_message").html(message);
}
(function($){
$(document).ready(function(){
	grtngs_time();
});
}(jQuery));