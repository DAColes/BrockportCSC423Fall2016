<?php
	include 'header.php';
?>

<?php
	echo"
		<br>
		<div id='callToAction'>
	    <h4 align='center'>Please Enter the Vendor ID of the Vendor to Remove</h4>
	  </div>
    	<div id='userdataform'>
            <form action='delete_vendor.php' method='post'>
                <table align='center'>
                    <tr>
                        <td><span align='right'>Enter Vendor ID:</span></td>
                        <td><input NAME='vendorid' TYPE='text' SIZE='50' required/></td>
                    </tr>
                </table>
                <p align='center'>
                    <input type='submit' value='Submit'/>
                    <input type='reset' value='Reset'/>
                </p>
            </form>
        </div>
	";
?>
</body>
</html>
