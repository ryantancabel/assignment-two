function getPlace(zip) {
var xhr = new XMLHttpRequest(); // create xhr object
// Register the callback function
xhr.onreadystatechange = function () {
// when response returns
if (xhr.readyState == 4 && xhr.status == 200) {
var result = xhr.responseText; // get response body
// split on ‘,’ and space; returns array
var place = result.split(', ‘);
// insert returned values into existing fields
if (document.getElementById("city").value == "")
document.getElementById("city").value = place[0];
if (document.getElementById("state").value == "")
document.getElementById("state").value = place[1];
}
}
// note ? indicates query string, including the zipcode
xhr.open("GET", "getCityState.php?zip=" + zip);
xhr.send(null); // using GET, so null argument
}
