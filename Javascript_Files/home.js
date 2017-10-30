
function getResults(value, num)
{

	xhr = new XMLHttpRequest(); 

	
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4 && xhr.status == 200)
		{
			var result = xhr.responseText;
			document.getElementById("main").innerHTML = xhr.responseText;

		}
	};

	if(value == 0)
	{
		xhr.open("GET","Javascript_Files/home.php?result=" + num, true);
		xhr.send();
	}

	if(value != 0) 
	{
		document.getElementById("main").innerHTML = "Hi There!";
	}
	
}

