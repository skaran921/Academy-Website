function ajax21()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
		{
			document.getElementById('application1').innerHTML=req.responseText;
		}			
	}
	req.open('POST','application1.php',true);
	req.send();
	
}
setInterval(function(){ajax21()},1000);