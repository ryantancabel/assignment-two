
Myfunction()
{

	var xhr = new XMLHttpRequest(); //create xhr object

	xhr.onreadystatechange = function();
	{
		//response returns
		if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById("jax").innerHTML = this.responseText;
		}
		http.open("GET","getuser.php?find&q"=str, true);
		http.send();
	}

}