
function showhide()
{
	var x = document.getElementById("choose").value;
	var y = document.getElementById("adding");
	var z = document.getElementById("member");

	if(x=="")
	{
		y.style.display = '';
		z.style.display = '';
	}
	if(x=="product")
	{
		y.style.display = 'block';
		z.style.display = '';
	}
	if(x=="customer")
	{
		y.style.display = '';
		z.style.display = 'block';
	}

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
