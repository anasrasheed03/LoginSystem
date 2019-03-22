<!DOCTYPE html>
<html>
<?php 
include('config/header.php');





?>



<style type="">
  /* Tabs*/
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #fff;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#tabs{
  background: #fff;
    color: #000;
}
#tabs h6.section-title{
    color: #000;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #f3f3f3;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #000;
    font-size: 20px;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/auditStyle.css">
<body>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
	
<!-- <div id="loginform"> -->
<form id="demoForm" style="width:90%" method="post">
   <h3 class="h3 text-center" >Add New Audit Report</h3>
  <div class="tab">
     
      <label for="location"><b>Location:</b></label><select  id="location" class="form-control" name="location">
      	<option  disabled selected value>----Select Location----</option>
        <option value="karachi">Karachi</option>
        <option value="lahore">Lahore</option>
      </select>
    
      <label for="competency"><b>Competency</b></label>
      <select name="competency"  class="form-control">
      	<option  disabled selected value>----Select Competency----</option>
          <option value="digital">Digital Framework</option>
          <option value="developing">Developing</option>
          <option value="hr"><b>HR</b></option> 
          
      </select>
    
    
      <label for="tracks"><b>Track</b></label>
      <select  name="tracks[]" class="form-control" id="tracks">
        
      </select>
    	
    	<label for="customer"><b>Customer</b></label>
        <input  type="text" class="form-control" id="customer" name="customer">
      
        <label for="projectName"><b>Project Name</b></label>
        <input type="text" class="form-control"  id="projectName" name="projectName">
    
    
      <label for="NC"><b>Number of NC</b></label>
      <input type="number" class="form-control"  id="NC" name="NC">
  </div>
  <div class="tab">
    
		<label for="projectManager"><b>Project Manager</b></label>
		      <input type="text" class="form-control" id="projectManager" name="projectManager">
		  <label for="Lead"><b>Development Lead</b></label>
		      <input type="text" class="form-control" id="Lead" name="Lead">
		  <label for="qaLead"><b>QA Lead</b></label>
		      <input type="text" class="form-control"  id="qaLead" name="qaLead">
		  <label for="auditor"><b>Auditor</b></label>
		      <input type="text" class="form-control" id="auditor" name="auditor">
		  <label for="aduitDate"><b>Audit Date</b></label>
		      <input type="date" class="form-control" id="aduitDate" name="aduitDate">


  </div>
  <div class="tab">
    	<label for="remarks"><b>Remarks/Comments</b></label>
    <textarea id="remarks" name="remarks" row="5" col="40" class="form-control" placeholder="Add Remarks about Audit Report"></textarea>
  </div>
  
<div class="tab">
    
<section id="tabs">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">

        <nav>
  <div class="nav nav-tabs  nav-fill" id="nav-tab" role="tablist">
    <a class="nav-item nav-link" id="nav-project-tab" data-toggle="tab" href="#nav-project" role="tab" aria-controls="nav-project" aria-selected="true">Project-Management</a>
     <a class="nav-item nav-link" id="nav-Software-tab" data-toggle="tab" href="#nav-Software" role="tab" aria-controls="nav-Software" aria-selected="false">Software Engineering</a>
     <a class="nav-item nav-link" id="nav-Development-tab" data-toggle="tab" href="#nav-Development" role="tab" aria-controls="nav-Development" aria-selected="false">Development</a>
     <a class="nav-item nav-link" id="nav-Quality-Assurance-tab" data-toggle="tab" href="#nav-Quality-Assurance" role="tab" aria-controls="nav-Quality-Assurance" aria-selected="false">Quality Assurance</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade active" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">
    <div class="accordion md-accordion" id="accordionEx11" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo11">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo11"
        aria-expanded="false" aria-controls="collapseTwo11">
        <h5 class="mb-0">
          Project Initiation <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo11" class="collapse" role="tabpanel" aria-labelledby="headingTwo11" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=2";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];

         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>">
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified0<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points0<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained0<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo12">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo12"
        aria-expanded="false" aria-controls="collapseTwo12">
        <h5 class="mb-0">
          Project Plannining <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo12" class="collapse" role="tabpanel" aria-labelledby="headingTwo12" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=3";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified1<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points1<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained1<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo13">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo13"
        aria-expanded="false" aria-controls="collapseTwo13">
        <h5 class="mb-0">
          Project Motitoring <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo13" class="collapse" role="tabpanel" aria-labelledby="headingTwo13" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=4";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified2<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points2<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained2<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>


</div></div>
  <div class="tab-pane fade" id="nav-Software" role="tabpanel" aria-labelledby="nav-Software-tab">
        <div class="accordion md-accordion" id="accordionEx11" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo14">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo14"
        aria-expanded="false" aria-controls="collapseTwo14">
        <h5 class="mb-0">
          Requirement Analysis <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo14" class="collapse" role="tabpanel" aria-labelledby="headingTwo11" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=5";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified3<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points3<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained3<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo15">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo15"
        aria-expanded="false" aria-controls="collapseTwo15">
        <h5 class="mb-0">
          Change Management <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo15" class="collapse" role="tabpanel" aria-labelledby="headingTwo15" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=6";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
             $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
            
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified4<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points4<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained4<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo16">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo16"
        aria-expanded="false" aria-controls="collapseTwo16">
        <h5 class="mb-0">
          Technical Design <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo16" class="collapse" role="tabpanel" aria-labelledby="headingTwo16" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=7";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified5<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points5<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained5<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>


</div>

  </div>
  <div class="tab-pane fade" id="nav-Development" role="tabpanel" aria-labelledby="nav-Development-tab">
    <div class="accordion md-accordion" id="accordionEx11" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo17">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo17"
        aria-expanded="false" aria-controls="collapseTwo17">
        <h5 class="mb-0">
          Code Writing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo17" class="collapse" role="tabpanel" aria-labelledby="headingTwo17" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=13";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified6<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points6<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained6<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo18">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo18"
        aria-expanded="false" aria-controls="collapseTwo18">
        <h5 class="mb-0">
          Unit Testing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo18" class="collapse" role="tabpanel" aria-labelledby="headingTwo18" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=14";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified7<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points7<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained7<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo19">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo19"
        aria-expanded="false" aria-controls="collapseTwo19">
        <h5 class="mb-0">
          Internal Release <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo19" class="collapse" role="tabpanel" aria-labelledby="headingTwo19" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=15";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified8<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points8<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained8<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>


</div>

  </div>
  <div class="tab-pane fade" id="nav-Quality-Assurance" role="tabpanel" aria-labelledby="nav-Quality-Assurance-tab">
    <div class="accordion md-accordion" id="accordionEx11" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo20">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo20"
        aria-expanded="false" aria-controls="collapseTwo20">
        <h5 class="mb-0">
          Test Planning & Designing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo20" class="collapse" role="tabpanel" aria-labelledby="headingTwo20" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=16";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;
            $stage=$re['stage_id'];


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
             
          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verified9<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points9<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained9<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo21">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo21"
        aria-expanded="false" aria-controls="collapseTwo21">
        <h5 class="mb-0">
          QA Acceptance & System Testing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21" data-parent="#accordionEx11">
       <div class="card-body">
        <div class="table-responsive-sm">
          <table class="table">
          <tr>
          <th>Sr.#</th>
          <th colspan="3">Query</th>
          <th colspan="1">Possible Evidence</th>
          <th colspan="1">Verified</th>
          <th colspan="1">Total Points</th>
          <th colspan="1">Points Attained</th>
          <th colspan="1">Exception/ Deviation</th>
          <th colspan="1">NC #</th>
          <th colspan="1">Observation and Remarks</th>
         </tr>
        <?php 
         $questions="select * from `questions` where stage_id=17";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         
         $sr=0;
         
         if($res>0){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $stage=$re['stage_id'];
            $a_points=$total_points;


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           <td>

          <input type="text" hidden name="stage[]" value="<?php echo htmlspecialchars($stage); ?>"> 
          <input type="text" readonly="" hidden name="ques[]"  value="<?php echo htmlspecialchars($question);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onChange="vav(this.id);" id="Verifieda<?php echo $sr; ?>" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_pointsa<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attaineda<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception[]"></td>
          <td colspan="1"><input type="text" name="nc[]"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation[]"></td>
        </tr>
        </div>



        <?php 
 }
         }
          ?>
      </table>
    </div>
      </div>

    </div>

  </div>

 

  </div>
</div>
  
    

</div>

  
    </div>
  </div>
</section>
  </div>
  <div class="tab">
    <div id="container">
      <br>
      <div class="row">
      <button class="btn btn-primary" id="filldetails" onclick="addNC()" align="right">Add NC Fields</button>
    </div>
    </div>
  </div>
  <div class="tab">
     <div id="containers">
      <br>
      <div class="row">
      <input type="text" id="member" name="member" value="">Add Number of Rows for Observations: (max. 10)
    </div>
    <div class="row">
      <button class="btn btn-primary" id="filldetail" onclick="addFields()" style="float: right;">Add Row</button>
    </div>
    </div>
  </div>
  <br/>
  <div style="overflow:auto;">

    <div>
      <button align="left" type="button" id="prevBtn" onclick="nextPrev(-1)"> Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next </button>
    </div>
  </div>
  <div style="text-align:center;margin-top:40px;">
    <em><strong>Step1</strong></em><span class="step"></span>---------
    <em><strong>Step2</strong></em><span class="step"></span>---------
    <em><strong>Step3</strong></em><span class="step"></span>---------
    <em><strong>Step4</strong></em><span class="step"></span>---------
    <em><strong>Step5</strong></em><span class="step"></span>---------
    <em><strong>Step6</strong></em><span class="step"></span>
    
    
  </div>
</form>
</div>
</div>



  


<script>

// function myFunction(e) {
//     document.getElementById("myText").value = e.target.value
// }
  



function vav(clicked_id) {
  
    d = clicked_id;
    // console.log(d);
   
    e=document.getElementById(d).value;
    console.log(e);
    console.log(d);
        res = d.slice(8, 10);
    console.log(res);
    total_point=document.getElementById('total_points'+res).value; 
    console.log(total_point);  

          
        if(e==='no'){ 
        document.getElementById('Attained'+res).setAttribute("value",0);

        }else if(e==='n/a'){
        document.getElementById('total_points'+res).setAttribute("value",0);
        document.getElementById('Attained'+res).setAttribute("value",0);
        }
        else if(e==='yes'){
          document.getElementById('Attained'+res).setAtdocument.getElementById('total_points'+res).setAttribute("value",total_points1); tribute("value",total_points1);
            
        }
}
</script>



<script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("member").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("containers");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Observations" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "Observations[]" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }


        function addNC(){
            // Number of inputs to create
            var number = document.getElementById("NC").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
              var h = document.createElement("H3");
              var t = document.createTextNode("NC# "+(i+1));
              h.appendChild(t);
              container.appendChild(h);
              container.appendChild(document.createElement("br"));
                // Append a node with a random text
                container.appendChild(document.createTextNode("Non Conformance Summary " + (i+1)));
                            
                // Create an <input> element, set its type and name attributes
                var input1 = document.createElement("input");
                input1.type = "text";
                input1.name = "NonConformanceSummary[]";
                container.appendChild(input1);
                 // ======================================
                container.appendChild(document.createTextNode("Type " + (i+1)));
                container.appendChild(document.createElement("br"));
                var input2 = document.createElement("input");
                input2.type = "text";
                input2.name= "type[]";
                container.appendChild(input2);
                // =========================================
                container.appendChild(document.createElement("br"));
                container.appendChild(document.createTextNode("Owner " + (i+1)));
                var input3 = document.createElement("input");
                input3.type = "text";
                input3.name = "owner[]";
                container.appendChild(input3);
                // =========================================
                // Append a line break 
                container.appendChild(document.createElement("br"));
                container.appendChild(document.createTextNode("Phase"+(i+1)));
                container.appendChild(document.createElement("br"));
                var input4 = document.createElement("select");
                input4.name="phase[]";
                container.appendChild(input4);                
                var options = ["Project Initiation","Project Planning","Project Monitoring","Requirement Analysis","Requirement Analysis","Change Management","Technical Design","Code Writing","Unit Testing","Internal Release","Test Planning & Designing","QA Acceptance & System Testing"];

                //Create and append the options
                for (var op = 0; op < options.length; op++) {
                    var option = document.createElement("option");
                    option.value = options[op];
                    option.text = options[op];
                    input4.appendChild(option);
                }
                
                container.appendChild(document.createElement("hr"));
            }
        }
    </script>

<!-- 
<script>

// function myFunction(e) {
//     document.getElementById("myText").value = e.target.value
// }
  



function vaw(clicked_id) {


    d = clicked_id;
    // console.log(d);
   
    e=document.getElementById(d).value;
    console.log(e);
    console.log(d);
        res = d.slice(8, 11);
    console.log(res);
    // total_point=document.getElementById('total_points'+res).value; 
    // console.log(total_point);  

        
        if(e==='no'){ 
        document.getElementById('Attained'+res).setAttribute("value",0);

        }else if(e==='n/a'){
        document.getElementById('total_points'+res).setAttribute("value",0);
        document.getElementById('Attained'+res).setAttribute("value",0);
        }
        else if(e==='yes'){
          document.getElementById('Attained'+res).setAttribute("value",total_points1);
          document.getElementById('total_points'+res).setAttribute("value",total_points1);   
        }
}
</script> -->
           

<script>
var currentTab = 0; 
showTab(currentTab);
function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  
 
  x[currentTab].style.display = "none";
  
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("demoForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
 
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
 
  x[n].className += " active";
}
</script>

<script type="text/javascript">

function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

document.forms['demoForm'].elements['competency'].onchange = function(e) {
    
    var relName = 'tracks[]';
    
   
    var relList = this.form.elements[ relName ];
    
  	var obj = Select_List_Data[ relName ][ this.value ];
    
     removeAllOptions(relList, true);
    
   
    appendDataToSelect(relList, obj);
};


var Select_List_Data = {
    
 // 'Free Scripts': {
 //                text: ['BPM', 'CRM', 'NutShell'],
 //                value: ['BPM', 'CRM', 'Nutshell']
 //            },
 //            'License': {
 //                text: ['Scrolling Divs', 'Tooltips', 'Rotate Images'],
 //                value: ['scroll', 'tooltips', 'rotate']
 //            }


   
    'tracks[]': {
               
        digital: {
           
            
                text: ['BPM', 'CRM', 'NutShell'],
                value: ['BPM', 'CRM', 'Nutshell']
           
        },
        developing: {
           text: ['Option1', 'Option2', 'Option3'],
            value: ['option1', 'option2', 'option3']
        },
        hr: {
            text: ['Option4', 'Option5', 'Option6'],
            value: ['option4', 'option5', 'option6']
        }
    }
    
};

window.onload = function() {
    var form = document.forms['demoForm'];
  var sel = form.elements['competency'];
    sel.selectedIndex = 0;
    
    var relName = 'tracks[]';
    var rel = form.elements[ relName ];
    
   var data = Select_List_Data[ relName ][ sel.value ];
    
    appendDataToSelect(rel, data);
};

</script>






<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_REQUEST['location'];
    $competency = $_REQUEST['competency'];
    $tracks = $_REQUEST['tracks'];
    $projectName = $_REQUEST['projectName'];
    $NC = $_REQUEST['NC'];
    $projectManager = $_REQUEST['projectManager'];
    $Lead = $_REQUEST['Lead'];
    $qaLead = $_REQUEST['qaLead'];
    $auditor = $_REQUEST['auditor'];
    $Customer = $_REQUEST['customer'];
    $aduitDate = $_REQUEST['aduitDate'];
     $remarks = $_REQUEST['remarks'];
    
    $track=$tracks[0];
    $question=$_REQUEST['ques'];
    $Evidence=$_REQUEST['Evidence'];
    $Verified=$_REQUEST['Verified'];
    $TotalPoints=$_REQUEST['TPoints'];
    $AttainedPoints=$_REQUEST['APoints'];
    $exception=$_REQUEST['exception'];
    $nc=$_REQUEST['nc'];
    $stages=$_REQUEST['stage'];
    $observation=$_REQUEST['observation'];
    $sumtotal_points=array_sum($TotalPoints);
    $sumattain_points=array_sum($AttainedPoints);
    $total=round(($sumattain_points/$sumtotal_points)*100);

    $NonConformanceSummary=$_REQUEST['NonConformanceSummary'];

    $type=$_REQUEST['type'];
    $owner=$_REQUEST['owner'];
    $phase=$_REQUEST['phase'];
    $Observations=$_REQUEST['Observations'];


    $query="INSERT INTO `audit`(`location`,`competency`,`tracks`,`Customer`,`projectName`,`Total_NC`,`projectManager`,`Lead`,`qaLead`,`auditor`,`aduitDate`,`remarks`) VALUES('$location','$competency','$track','$Customer','$projectName',$NC,'$projectManager','$Lead','$qaLead','$auditor','$aduitDate','$remarks')";
    $sql=mysqli_query($connect, $query);
        if($sql==true){
         $last_id = mysqli_insert_id($connect);
          $j=0;
          while($j<count($Verified)){
                 

            $query1="INSERT INTO `check_list`(`Evidence`, `Verified`, `Total_Points`, `Points_Attained`, `Exception_Deviation`, `NC`, `Observation`, `report_id`,`question`,`sumtotal_points`,`sumattain_points`,`project_total`,`stage_id`) VALUES('$Evidence[$j]','$Verified[$j]','$TotalPoints[$j]','$AttainedPoints[$j]','$exception[$j]','$nc[$j]','$observation[$j]',$last_id,'$question[$j]',$sumtotal_points,$sumattain_points,$total,$stages[$j]);";
            
  
       $j++;
     
    if(mysqli_query($connect, $query1)==true){
      
    }else{
      echo $query1;
     }
}

   $k=0;$l=0;
          while($k<count($type)){
            while($l<count($Observations)){
            $query2="INSERT INTO `summary`(`NonConformanceSummary`,`type`,`owner`,`phase`,`report_id`,`Observations`) VALUES('$NonConformanceSummary[$k]','$type[$k]','$owner[$k]','$phase[$k]','$last_id','$Observations[$l]');";
            
            $l++;
            if(mysqli_query($connect,$query2)){

            }else{
              echo $query2;
            }

          }$k++;

        }

echo "<script>alert('Report Has been added Successfully');</script>";
 echo "<script type='text/javascript'>alert('Project Total Points: {$total}');</script>";

        header("location:index");
        }
        
        else{
        echo "<script>alert('Report Not added Successfully');</script>";
        } 





   

     







}
?>



<?php include('config/footer.php');?>