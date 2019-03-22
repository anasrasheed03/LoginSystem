<?php 

include('config/header.php');
?>
<style>


  body {
  background-color: #f1f1f1;
}
  

  table{
    left:50px;
  }

</style>

<br/>
<br/>
<h3 class="h3 text-center" >Audit Reports Details</h3>

<div class="container">
  <div class="row">
    <div class="col-8"></div>
    <div class="col-12">


<table  class="table text-center table-hover">
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
    	$nc=$row['Total_NC'];
      $remarks=$row['remarks'];
?>
    <tr>
      <th scope="col" colspan="8" style="text-align:center;">General Information
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
    <tr>
      <th scope="col" colspan="4" style="text-align:left">Remarks</th>   
    </tr>
    <tr>
      <td colspan="4" style="text-align:left"><?php echo $remarks;?></td>      
    </tr>
  </thead>
  <tbody>

    
  <?php	}
}
?> 
    
  </tbody>


</table>

<?php 
      $query="SELECT project_total from check_list where report_id=$id";
      $get=mysqli_query($connect, $query);
      if($get==true){
        $fetch=mysqli_fetch_assoc($get);
        $project_total=$fetch['project_total'];
      }
?>

<h3 class="text-center">Project Process Compliance %  : <?php echo $project_total;?></h3>
<br/>

<table class="table text-center table-hover">
  <tr>
    <th scope="col" colspan="8" style="text-align:center;">Phase wise compliance</th>
  </tr>
  <tr>
    <th class="text-left">Sr#</th>
    <th class="text-left">Query</th>
    <th class="text-left">Total Points</th>
    <th class="text-left">Points Attained</th>
  </tr>
<?php 
  
  $query1="select stages.stage_name, sum(check_list.Total_Points), SUM(check_list.Points_Attained) from stages INNER JOIN check_list where stages.stage_id = check_list.stage_id GROUP By stages.stage_name ORDER BY stages.stage_id";

  $sql1=mysqli_query($connect, $query1);
  $rows1=mysqli_num_rows($sql1);
  $sr=0;
  if($rows>0){
  while($row1=mysqli_fetch_assoc($sql1)){
    $stage_name=$row1['stage_name'];
    $Total_Points=$row1['sum(check_list.Total_Points)'];
    $Points_Attained=$row1['SUM(check_list.Points_Attained)'];
    
    $sr++;


?>
  <tr>
    <td style="text-align:left"><?php echo $sr?></td>
    <td style="text-align:left"><?php echo $stage_name;?></td>
    <td style="text-align:left"><?php echo $Total_Points;?></td>
    <td style="text-align:left"><?php echo $Points_Attained;?></td>
  </tr>

  <?php 
}
}
  ?>

</table>
<br/>
<br/>



</div>
</div>
<div class="row">
  <div class="col-8">
  <table class="table text-center table-hover">
    <?php 
    $query2="SELECT * FROM `summary` WHERE `report_id` = $id";
    $sum=mysqli_query($connect, $query2);
    $summary=mysqli_num_rows($sum);
    $se=0;
    if($summary>0){
      while($sumfetch=mysqli_fetch_assoc($sum)){
        $NonConformanceSummary=$sumfetch['NonConformanceSummary'];
        $type=$sumfetch['type'];
        $owner=$sumfetch['owner'];
        $phase=$sumfetch['phase'];
        
        $se++;
     
    ?>
  <tr>
    <th class="text-left">NC# <?php echo $se; ?></th>
  </tr>
  <tr>
    <th class="text-left">Non Conformance Summary</th>
    <td class="text-left"><?php echo $NonConformanceSummary; ?></td>
  </tr>
  <tr>
    <th class="text-left">Type</th>
    <td class="text-left"><?php echo $type; ?></td>
  </tr>
  <tr>
    <th class="text-left">Phase</th>
    <td class="text-left"><?php echo $phase; ?></td>
  </tr>
  <tr>
    <th class="text-left">Owner</th>
    <td class="text-left"><?php echo $owner; ?></td>
  </tr>

<?php 
 }
    }
?>
<br/>
</table>

</div>
</div>
<br/>
<div class="row">
  <div class="col-8">
    
    <table class="table text-center table-hover">
    <?php 
    $query2="SELECT * FROM `summary` WHERE `report_id` = $id";
    $sum=mysqli_query($connect, $query2);
    $summary=mysqli_num_rows($sum);
    $se=0;
    if($summary>0){
      while($sumfetch=mysqli_fetch_assoc($sum)){
        $Observations=$sumfetch['Observations'];
        
        $se++;
     
    ?>
  
  <tr>
    <th class="text-left">Sr #</th>
    <td class="text-left"><?php echo $se; ?></td>
  </tr>
  <tr>
    <th class="text-left">Observations</th>
    <td class="text-left"><?php echo $Observations; ?></td>
  </tr>
 

<?php 
 }
    }
?>
<br/>
</table>
  </div>
</div>
</div>

  

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