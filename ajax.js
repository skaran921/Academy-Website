function ajax()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
		{
			document.getElementById('jobnoti').innerHTML=req.responseText;
		}			
	}
	req.open('POST','jobnoti.php',true);
	req.send();
	
}
setInterval(function(){ajax()},1000);