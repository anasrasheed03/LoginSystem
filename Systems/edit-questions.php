<?php 
include('config/header.php');
?>
<style type="text/css">
  body {
  background-color: #f1f1f1;
}

</style>

<?php
$status1=$_GET['status'];
$id1=$_GET['qid'];
if (isset($_POST['submit'])) {
$ques=$_POST['question'];
$tp=$_POST['total_points'];


echo $stagename=$_POST['stage_name'];

// echo $stagename."<br/>";
$sq="update questions set question='$ques' ,Total_Points=$tp where question_id=$id1"; 
echo $sq;
if($connect->query($sq) == TRUE){
                
}else{
        echo "<script>alert('Not Submit')</script>;";
}
}
 ?>



<br/>
<br/>
<br/>
<h3 class="h3 text-center" >List of All Questions</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-2"></div>
<div class="col-8">



<table class="table text-center table-hover">
  <thead>
    <tr>
      
      <th scope="col">Questions</th>
      <th scope="col">Total points</th>
      <th scope="col">Stage Name</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>


 	<?php 


$query="select questions.question_id, questions.question, questions.Total_Points, stages.stage_name, roles.role_name from `questions` inner join `stages` inner join `roles` where stages.role_id=roles.role_id && questions.stage_id=stages.stage_id && question_id=$id1";
$sql=mysqli_query($connect, $query);
$rows=mysqli_num_rows($sql);
$row=mysqli_fetch_assoc($sql);
if($rows=1){
	
		$question=$row['question'];
		$total_points=$row['Total_Points'];
    $stage_name=$row['stage_name'];
    $role=$row['role_name'];
    $id=$row['question_id'];   

  
if($status1=='edit'&&$id1!=''){?> 
  
  <br/>
  
  <tr>
  <form method="post">          
      <td id="question"><textarea name="question"><?php echo $question; ?></textarea></td>
      <td id="points"><input type="text" value="<?php echo $total_points; ?>" name="total_points"></td>
      <td id="stagename"><select name="stage_name"> 
     <?php
         $dd_res=mysqli_query($connect, "Select DISTINCT stage_name,stage_id from stages");
         while($r=mysqli_fetch_row($dd_res))
         { 
               echo "<option value='$r[0]'> $r[0] </option>";
         }
     ?>
</select></td>
      <!-- 
      <input type="text" value="<?php echo $stage_name; ?>" name="stage_name"></td> -->
      <td><input type="submit" name="submit" id="submitFormData"  value="Submit" /></td>
      </form>
 </tr><?php }
?><?php	
}
?> 
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


<script>
function SubmitFormData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var gender = $("input[type=radio]:checked").val();
    $.post("submit.php", { name: name, email: email, phone: phone, gender: gender },
    function(data) {
   $('#results').html(data);
   $('#myForm')[0].reset();
    });
}

</script>

<?php 
include('config/footer.php');
 ?>