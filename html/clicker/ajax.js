<<<<<<< HEAD
function ajax(url,callback){
	var ajaxRequest;
	try{ajaxRequest = new XMLHttpRequest();} catch (e){try{ajaxRequest=new ActiveXObject('Msxml2.XMLHTTP');} catch (e) {try{ajaxRequest=new ActiveXObject('Microsoft.XMLHTTP');} catch (e){alert("Something broke!");return false;}}}
	if (callback){ajaxRequest.onreadystatechange=function(){if(ajaxRequest.readyState==4){callback(ajaxRequest.responseText);}}}
	ajaxRequest.open('GET',url+'&nocache='+(new Date().getTime()),true);ajaxRequest.send(null);
}
=======
function ajax(url,callback){
	var ajaxRequest;
	try{ajaxRequest = new XMLHttpRequest();} catch (e){try{ajaxRequest=new ActiveXObject('Msxml2.XMLHTTP');} catch (e) {try{ajaxRequest=new ActiveXObject('Microsoft.XMLHTTP');} catch (e){alert("Something broke!");return false;}}}
	if (callback){ajaxRequest.onreadystatechange=function(){if(ajaxRequest.readyState==4){callback(ajaxRequest.responseText);}}}
	ajaxRequest.open('GET',url+'&nocache='+(new Date().getTime()),true);ajaxRequest.send(null);
}
>>>>>>> c3bb36612f51221269ac39f31c37b972a168dc81
