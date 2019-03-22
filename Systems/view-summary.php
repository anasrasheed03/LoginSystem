<?php 
include('config/header.php');
?>
<style type="text/css">
  body {
  background-color: #f1f1f1;
}

</style>


<br/>
<br/>
<br/>
<h3 class="h3 text-center" >List of Audit Reports</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-2"></div>
<div class="col-8">
<table class="table text-center table-hover">
  <thead>
    <tr>
      <th scope="col">Customer</th>
      <th scope="col">Location</th>
      <th scope="col">Competency</th>
      <th scope="col">Project</th>
      <th scope="col">Audit Date</th>
     
    </tr>
  </thead>
  <tbody>
  	<?php 
$query="select * from `audit`";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);
if($rows>0){
	while($row=mysqli_fetch_assoc($sql)){
		$location=$row['location'];
		$competency=$row['competency'];
		$customer=$row['Customer'];
		$Project=$row['projectName'];
		$auditDate=$row['aduitDate'];
    $id=$row['id'];
       
?>
    <tr>
      <th scope="row"><a style="color:black;" href="view-report?id=<?php echo $id;?>"><?php echo $customer;?></a></th>
      <td><?php echo $location;?></td>
      <td><?php echo $competency;?></td>
      <td><?php echo $Project;?></td>
      <td><?php echo $auditDate;?></td>
     
      </tr>
  <?php	}
}
?> 
    
  </tbody>


</table>
</div>
<div class="col-2"></div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<?php 
include('config/footer.php');
 ?>