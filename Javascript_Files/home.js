function getMe()
{

	document.getElementById("blue").innerHTML = "Hi There!";


}



function getResults(num)
{

	xhr = new XMLHttpRequest(); 

	
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4 && xhr.status == 200)
		{
			var result = xhr.responseText;
			document.getElementById("main").innerHTML = xhr.responseText;

		}
	};

	xhr.open("GET","Javascript_Files/home.php?result=" + num, true);
	xhr.send();
	
}

