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
<h3 class="h3 text-center" >List of All Questions</h3>

<div class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="row">
		<div class="col-2"></div>
<div class="col-8">



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
      <td id="sr"><?php echo $sr; ?></td>      
      <td id="question" onclick="change()"><?php echo $question;?></td>
      
      <td id="points"><?php echo $total_points;?></td>
      
      <td id="stagename"><?php echo $stage_name;?></td>
      
      <td id="role"><?php echo $role;?></td>
      <td><a href="edit-questions?qid=<?php echo $id;?>&status=edit"> <button>Update</button></a></td>
      

         
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