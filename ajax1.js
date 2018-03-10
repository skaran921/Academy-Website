function ajax1()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
		{
			document.getElementById('academynoti').innerHTML=req.responseText;
		}			
	}
	req.open('POST','academynoti.php',true);
	req.send();
	
}
setInterval(function(){ajax1()},1000);