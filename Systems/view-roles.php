<?php 
include('config/header.php');
?>
<?php 
  if(isset($_POST['update'])){
    echo $role=$_POST['role_name'];
    echo $rid=$_POST['rid'];
    $sel="update roles set role_name='$role' where role_id=$rid";
    $end=mysqli_query($connect, $sel);
    if($end==true){
      header('location:view-roles');
    }
  }

?>


<style type="text/css">
  body {
  background-color: #f1f1f1;
}

 #rid{
    border: none;
    border-color: transparent;
    background-color: #f1f1f1;
    outline: none !important;
  }
#role{
    border: none;
    border-color: transparent;
    background-color: #f1f1f1;
    outline: none !important;
}

input:focus{

    color: #ff0000;
    background-color: #fff;
}
</style>


<br/>
<br/>
<br/>
<h3 class="h3 text-center" >List of All Roles</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-2"></div>
<div class="col-8">
<table class="table text-center table-hover">
  <thead>
    <tr>
      <th scope="col">Sr#</th>
      <th scope="col">Role Names</th>
      <th scope="col">Update</th>
     
    </tr>
  </thead>
  <tbody>
  	<?php 
$query="select * from `roles`";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);
if($rows>1){
	while($row=mysqli_fetch_assoc($sql)){
		$role_name=$row['role_name'];
		
    $id=$row['role_id'];
       
?>
    <tr>
      <form method="Post">
      <td><input type="text" class="text-center" name="rid" id="rid" readonly value="<?php echo $id;?>"></td>
      <td><input type="text" name="role_name" id="role" value='<?php echo $role_name;?>' ></td>
      <td><input type="submit" name="update" value="Update Roles"></td>
         </form>
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