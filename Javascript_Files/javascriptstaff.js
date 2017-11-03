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
			
			
			//somewhere here
			handleNewSubmit();
			
		}
	};

	xmlhttp.open("GET","PHP_Files/stafflogin.php?choice=" + choice, true);
	xmlhttp.send();
	document.getElementById("here").innerHTML = xmlhttp.responseText;
	return false;
}

function handleNewSubmit(){
  
  var addForm = document.getElementById('adding');
	var result = document.getElementById('inputhere');
  
  addForm.onsubmit = function(e){
    
    e.preventDefault();
    
    
    var formData = new FormData(addForm);
    
    
        {
      
            if(window.XMLHttpRequest){
        var xmlhttp = new XMLHttpRequest();
      } else {
        var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
      }
      
            xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          	result.textContent = xmlhttp.responseText;
	
        }
        
      }
      
      xmlhttp.open('POST', 'PHP_Files/stafflogin.php', true);
      xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      

      xmlhttp.send(formData);

    }
    
    return false;
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


