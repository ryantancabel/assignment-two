
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
		xhr.open("GET","Javascript_Files/home.php?value=" + value, true);
		xhr.send();
	}

}

function getCookie(name) {
  var value = "; " + document.cookie;
	if(value && value.length>0){
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
 }
}

function getJSON(IDent)
{
	var myObj;

	myObj = [];

	var existingValue = getCookie("value");
	if(existingValue){
		 var existingObjs = JSON.parse(existingValue);
		 var isFound = false;

		 if(existingObjs.length >0){
			 for(var k=0; k< existingObjs.length; k++){
				 if(existingObjs[k].id == IDent){
					 existingObjs[k].quantity = existingObjs[k].quantity+1;
					 isFound =true;
				 }
			 }
		 }
		 if(!isFound){
			  existingObjs.push({"id":IDent, "quantity":1});
		 }

		 var exists = JSON.stringify(existingObjs);
			alert(exists);
			document.cookie = "value=" + exists + ";expires=Thu, 18 Sep 2018 12:00:00 UTC; path=/";

	}else{
	     myObj.push({"id":IDent, "quantity":1});
			 var complete = JSON.stringify(myObj);
		  	alert(complete);
		  	document.cookie = "value=" + complete + ";expires=Thu, 18 Sep 2018 12:00:00 UTC; path=/";

  }
}

function cookieSend()
{
	xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4 && xhr.status == 200)
		{
			var result = xhr.responseText;
			document.getElementById("main").innerHTML = xhr.responseText;

		}
	};

		xhr.open("GET","PHP Files/cart.php", true);
		xhr.send();
}

function removeProduct(IDent)
{

	var existingValue = getCookie("value");
	var existingObjs = JSON.parse(existingValue);
	document.getElementById("red").innerHTML = existingObjs[4].quantity;

	for(var i = 0; i<existingObjs.length; i++)
	{
		if(existingObjs[i].id = IDent)
		{
			existingObjs.splice(i,1);
		}
	}


}
