function ajax2()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
		{
			document.getElementById('feeinfo').innerHTML=req.responseText;
		}			
	}
	req.open('POST','feeinfo.php',true);
	req.send();
	
}
setInterval(function(){ajax2()},1000);