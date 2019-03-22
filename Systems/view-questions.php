<?php 
include('config/header.php');
?>
<?php 
  if(isset($_POST['update'])){
    $question=$_POST['question'];
    $qid=$_POST['qid'];
    $total_points=$_POST['points'];
    $sel="update questions set question='$question',Total_Points=$total_points where question_id=$qid";
    $end=mysqli_query($connect, $sel);
    if($end==true){
      header('location:view-questions');
    }
  }

?>

<style type="text/css">
  body {
  background-color: #f1f1f1;
}


  #qid,#points{
    border: none;
    border-color: transparent;
    background-color: #f1f1f1;
    outline: none !important;
    text-align: center;
  }
#question{
    border: none;
    border-color: transparent;
    background-color: #f1f1f1;
    outline: none !important;
}
textarea:focus,input:focus{

    color: #ff0000;
    background-color: #fff;
}
</style>


<br/>
<br/>
<br/>
<h3 class="h3 text-center" >List of All Questions</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-1"></div>
<div class="col-9">



<table class="table text-center table-hover">
  <thead>
    <tr>
      <th scope="col">Sr#</th>
      <th scope="col">Questions</th>
      <th scope="col">Total points</th>
      <th scope="col">Stage Name</th>
      <th scope="col">Role</th>
     
    </tr>
  </thead>
  <tbody>
  	<?php 



$query="select questions.question_id, questions.question, questions.Total_Points, stages.stage_name, roles.role_name from `questions` inner join `stages` inner join `roles` where stages.role_id=roles.role_id && questions.stage_id=stages.stage_id";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);

$sr=0;
if($rows>1){
	while($row=mysqli_fetch_assoc($sql)){
    $sr++;
		$question=$row['question'];
		$total_points=$row['Total_Points'];
    $stage_name=$row['stage_name'];
    $role=$row['role_name'];
    $id=$row['question_id'];   
?>


    <tr>

      <form method="Post">
      <td id="sr"><?php echo $sr; ?></td>  
      <td><textarea rows="5" cols="50" id="question" name="question"><?php echo $question; ?></textarea></td>
      <td><input type="text" name="points" id="points" value="<?php echo $total_points;?>"></td>
      <td id="stagename"><?php echo $stage_name;?></td>
      
      <td id="role"><?php echo $role;?></td>
      <td><input type="submit" name="update" value="Update Question"></td>
      <td><input type="text" class="text-center" hidden name="qid" id="qid" readonly value="<?php echo $id;?>"></td>
         </form>
          
      
      
     
      

         
      </tr>
  <?php	
}
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