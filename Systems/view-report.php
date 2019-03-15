<?php 

include('config/header.php');
?>

<?php 


?>
<h3 class="h3 text-center" >Audit Reports Details</h3>


<table border=1 class="table text-center table-hover">
  <thead>
  	 	<?php 
  	$id=$_GET['id'];
$query="select * from `audit` where id=$id";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);
if($rows==1){
	while($row=mysqli_fetch_assoc($sql)){
		$location=$row['location'];
		$competency=$row['competency'];
		$customer=$row['Customer'];
		$track=$row['tracks'];
		$auditDate=$row['aduitDate'];
		$Project=$row['projectName'];
    $id=$row['id'];
    	$projectManager=$row['projectManager'];
    	$lead=$row['Lead'];
    	$qalead=$row['qaLead'];
    	$auditor=$row['auditor'];
    	$nc=$row['NC'];
?>
    <tr>
      <th scope="col" colspan="8" style="text-align:left">General Information
      <tr>
      <th scope="col" style="text-align:left">Location</th>
      <td style="text-align:left"><?php echo $location;?></td>
      <th scope="col" style="text-align:left">Project Manager</th>
      <td style="text-align:left"><?php echo $projectManager;?></td>
      <tr>
      <th scope="col" style="text-align:left">Competency</th>
      <td style="text-align:left"><?php echo $competency;?></td>
      <th scope="col" style="text-align:left">Development Lead</th>
      <td style="text-align:left"><?php echo $lead;?></td>
      <tr>
      <th scope="col" style="text-align:left">Track</th>
		<td style="text-align:left"><?php echo $track;?></td>
	  <th scope="col" style="text-align:left">QA Lead</th>
		<td style="text-align:left"><?php echo $qalead;?></td>
      <tr>
      <th scope="col" style="text-align:left">Customer</th>
      <td style="text-align:left"><?php echo $customer;?></td>
      <th scope="col" style="text-align:left">Auditor</th>
      <td style="text-align:left"><?php echo $auditor;?></td>
      <tr>
      <th scope="col" style="text-align:left">Project</th>
      <td style="text-align:left"><?php echo $Project;?></td>
      <th scope="col" style="text-align:left">Audit Date</th>
      <td style="text-align:left"><?php echo $auditDate;?></td>
      <tr>
      <th scope="col" colspan="2" style="text-align:left">Number of NC </th>
      <td colspan="2" style="text-align:right"><?php echo $nc;?></td>
      </tr>
  </tr>
  </tr>
  </tr>
  </tr>
  </tr>
  </tr>
      </th>
     
    </tr>
  </thead>
  <tbody>

    
  <?php	}
}
?> 
    
  </tbody>


</table>

<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

<?php 
include('config/footer.php');
 ?>