<!DOCTYPE html>
<html lang="en">

<?php
 @session_start();
    include('connect.php');
     
if ($_SESSION['logged_in'] = false) {
    $_SESSION['message'] = 'You must Login to continue use this section.';
    
} else {
    $username = $_SESSION['username'];
    
    
   
}
?>

    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="individualstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/16e94d9d43.js" crossorigin="anonymous"></script>

  


    <title>Individual Report</title>
</head>
<body>

<h1>Individual Report</h1>
<?php echo "<p style='font-family: 'Times New Roman', Times, serif; margin:20px;' >Faculty Name: ".$username."</p>";?>
<table  width="1500px" style="margin:auto;" >

  
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">            
             <td class="bold" style="color:blisque"  >Award_name</td><td align="center">Position</td><td align="center">Event_name</td><td align="center">university</td>
            <td align="center">College name</td> <td align="center">level</td><td align="center">Edit</td> <td align="center">Delete</td><td>Preview</td>
            
        </tr>
                   



<?php

   
   
	include('connect.php');
   
    $s="select * from awards where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
     
    
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px'>$data[2]</td><td  style=' padding-left:20px'>$data[3]</td><td  style=' padding-left:20px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td>
                    
                
                     ";?>
                     <td style=' padding-left:10px'>
<a href="edit1.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px'>
<a href="delete1.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview1.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
         
	<?php } ?>
</table>
<script>
    $(function()
{
	$('.scroll-pane').jScrollPane();
});
</script>
</form>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">            
             <td class="bold" style="color:blisque"  >PET Appered</td><td align="center">PET Date</td><td align="center">PET Score</td><td align="center">GATE Appred</td>
            <td align="center">GATE Date</td> <td align="center">GATE Score</td><td align="center">Edit</td> <td align="center">Delete</td> <td align="center">Preview</td> 
            
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from competitive_exam where Faculty_name='$username'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
				<td style=' padding-left:10px'>

<a href="edit2.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete2.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview2.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
</table>
</form>



 <table  width="1500px" style="margin:auto"  id=scroll-pane >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">           
             <td class="bold" style="color:blisque"  >Admitted Program</td><td align="center">Specialization</td><td align="center">Admission Year</td><td align="center">University</td>
            <td align="center">Registration No </td> <td align="center">College name</td><td align="center">Status </td> <td align="center">Reaserch topic </td><td align="center">Guide Name</td>
            <td align="center">Edit</td> <td align="center">Delete</td> <td>Preview</td>
            
        </tr>           



<?php

	include('connect.php');
   
    $s="select * from qualification where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td><td  style=' padding-left:60px;text-align: center;'>$data[8]</td><td  style=' padding-left:60px;text-align: center;'>$data[9]</td><td  style=' padding-left:60px;text-align: center;'>$data[10]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit3.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete3.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px;text-align: center;'>
<a href="preview3.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
			<?php } ?>
			
</table>

</form>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">               
             <td class="bold" style="color:blisque"  >Resource person</td><td align="center">Topic Name</td><td align="center">Event Name</td><td align="center">Level</td>
            <td align="center">Venue </td> <td align="center">Date</td>
            <td align="center">Edit</td><td align="center">Delete</td>  <td>Preview</td>
            
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_as_resource where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit4.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete4.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview4.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
			
</table>
<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">          
             <td class="bold" style="color:blisque"  >Reason Long live</td><td align="center">From Date</td><td align="center">To Date</td><td align="center">Date of joining after long live</td>
            <td align="center">Edit</td> <td align="center">Delete</td><td>Preview</td>
            
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_long_live where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td>";?>
                <td style=' padding-left:10px'>
<a href="edit5.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete5.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview5.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
			<?php } ?>
			
</table>
</form>

<table  width="1500px" style="margin:auto" >

  

 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:grey" align="center" class="bold">        
             <td class="bold" style="color:blisque"  >Date of joining</td><td align="center">SDNR number</td><td align="center">RAIT Experience</td><td align="center">Other Experience</td>
            <td align="center">Industry Experience </td> <td align="center">Total Experience</td><td align="center">Starting Designation </td> <td align="center">1st Promotion</td><td align="center">1st Promotion Date</td><td align="center">2nd Promotion </td> <td align="center">2nd Promotion Date</td>
            <td align="center">Edit</td> <td align="center">Delete</td> <td>Preview</td>
            
        </tr>
                   



<?php

	include('connect.php');
   
    $s="select * from faculty_promotion where Faculty_name='$username' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td><td  style=' padding-left:10px;text-align: center;'>$data[8]</td><td  style=' padding-left:10px'>$data[9]</td><td  style=' padding-left:20px'>$data[10]</td><td  style=' padding-left:20px;text-align: center;'>$data[11]</td><td  style=' padding-left:50px;text-align: center;'>$data[12]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit6.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete6.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview6.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
      </table>
</form>
    
            </body>
</html>