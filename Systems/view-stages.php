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
<h3 class="h3 text-center" >List of All Stages</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-2"></div>
<div class="col-8">
<table class="table text-center table-hover">
  <thead>
    <tr>
      <th scope="col">Sr#</th>
      <th scope="col">Stage Names</th>
      <th scope="col">Update</th>
     
    </tr>
  </thead>
  <tbody>
  	<?php 
$query="select stages.stage_id, stages.stage_name, roles.role_name from `stages` inner join `roles` where stages.role_id=roles.role_id";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);
if($rows>1){
	while($row=mysqli_fetch_assoc($sql)){
		$stage_name=$row['stage_name'];
		$role_name=$row['role_name'];
    $id=$row['stage_id'];
       
?>
    <tr>      
      <td><?php echo $stage_name;?></td>
      <td><?php echo $role_name;?></td>
      <td><button>Update</button></td>
         
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