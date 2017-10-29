<?php


function ChangeUser()
{
  echo "Here!";
  include 'db.php';

  $userId = $_POST['ID'];
  $username =  $_POST['User'];
  $password = $_POST['Pass'];
  $email = $_POST['Email'];
  $first = $_POST['First'];
  $last = $_POST['Last'];
  $street = $_POST['Street'];
  $suburb = $_POST['Suburb'];
  $state = $_POST['State'];
  $post = $_POST['Post'];


  $result = mysql_query("UPDATE MemberBase SET Username = '$username',
  Password = '$password', Email = '$email', FirstName = '$first',
  LastName = '$last', StreetName = '$street', Suburb = '$suburb',
  State = '$state', PostCode = '$post' WHERE ID = '$userId' ");

  if(mysql_num_rows()==1)
  {
    echo "It Works!";
  }
  else {
    echo "Not so much!";
  }


}

function PrintUserInfo($q)
{

  include 'db.php';
  $q = $_GET['q'];

  $sql="SELECT * FROM MemberBase WHERE Username ='".$q."'";
  $result = mysql_query($sql);

  if (mysql_num_rows($result)==1)
  {
        echo '<form action="getuser.php" name="customerUpdate" method="post">
        <table>
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Street Name</th>
        <th>Suburb</th>
        <th>State</th>
        <th>Postcode</th>
        </tr>';

        while($row = mysql_fetch_array($result, MYSQL_NUM))
        {
         echo "<tr>\n";
         echo '<td> <input type="text" size="4"name="zero" value="'.$row[0].'"/> </td>'."\n";
         echo '<td> <input type="text" size="15" name="one" value="'.$row[1].'"/> </td>'."\n";
         echo '<td> <input type="text" size="15" name="two" value="'.$row[2].'"/> </td>'."\n";
         echo '<td> <input type="text" size="25" name="three" value="'.$row[3].'"/> </td>'."\n";
         echo '<td> <input type="text" size="10" name="four" value="'.$row[4].'"/> </td>'."\n";
         echo '<td> <input type="text" size="10" name="five" value="'.$row[5].'"/> </td>'."\n";
         echo '<td> <input type="text" size="15" name="six" value="'.$row[6].'"/> </td>'."\n";
         echo '<td> <input type="text" size="10" name="seven" value="'.$row[7].'"/> </td>'."\n";
         echo '<td> <input type="text" size="1" name="eight" value="'.$row[8].'"/> </td>'."\n";
         echo '<td> <input type="text" size="1" name="nine" value="'.$row[9].'"/> </td>'."\n";
         echo "</tr>\n";
        }
	echo '<td> <input type="submit" value="Update" name="inputSubmit"> </td>'."\n";
        echo "</table>\n";
        echo "</form>\n";

  }
  else {
    echo "Please enter the correct Username";
  }
  mysql_free_result($result);
  mysql_close();
}


if(isset($_GET['q']))
{
  $q = $_GET['q'];
  PrintUserInfo($q);
}

if(isset($_POST['inputSubmit']))
{
	echo "one";
	ChangeUser();
	echo "two";
}


?>
