function ajax2()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
		{
			document.getElementById('application').innerHTML=req.responseText;
		}			
	}
	req.open('POST','application.php',true);
	req.send();
	
}
setInterval(function(){ajax2()},1000);