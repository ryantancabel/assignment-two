
function validate()
{
	var x = document.cookie;
	var name = "staffmember=";
	var array = x.split(';');
	var valid = false;

	for (var i=0; i<array.length; i++)
	{
		var y = array[i];

		while(y.charAt(0) == ' ')
		{
			y = y.substring(1);
		}

		if (y == "staffmember=valid")
		{
			valid = true;
		}
	}

	if(valid == false)
	{
		window.location.replace('stafflogin.html');
	}
}

function output(choice)
{
	event.preventDefault();
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			console.log(this.responseText);
			var z = this.responseText
			document.getElementById("inputhere").innerHTML = z;
		}
	};

	xmlhttp.open("GET","PHP Files/stafflogin.php?choice=" + choice, true);
	xmlhttp.send();
	document.getElementById("here").innerHTML = xmlhttp.responseText;
	return false;
}


function showUser(str) {

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
