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
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
           <td colspan="1"><select onchange="val()" id="Verified" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><input type="text" readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>" id="total_points[<?php echo $sr; ?>]"></td>
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained[<?php echo $sr; ?>]"></td>
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
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select onchange="val()" id="Verified" name="Verified">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo $total_points;?></td>
          <td colspan="1" name="Attained" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
          <div class="tab-pane fade" id="nav-Software" role="tabpanel" aria-labelledby="nav-Software-tab">
        
<div class="accordion md-accordion" id="accordionEx11" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo11">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo11"
        aria-expanded="false" aria-controls="collapseTwo11">
        <h5 class="mb-0">
          Requirement Analysis <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=5";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
          Change Management <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=6";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>=1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select onchange="val()" id="Verified" name="Verified">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo $total_points;?></td>
          <td colspan="1" name="Attained" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
          Technical Design <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=7";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>=1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
    <div class="card-header" role="tab" id="headingTwo11">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo11"
        aria-expanded="false" aria-controls="collapseTwo11">
        <h5 class="mb-0">
          Code Writing <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=13";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
          Unit Testing <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=14";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>=1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
          Internal Release <i class="fas fa-angle-down rotate-icon"></i>
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
         $questions="select * from `questions` where stage_id=15";
         $find=mysqli_query($connect, $questions);
         $res=mysqli_num_rows($find);
         $sr=0;
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
    <div class="card-header" role="tab" id="headingTwo30">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo30"
        aria-expanded="false" aria-controls="collapseTwo30">
        <h5 class="mb-0">
          Test Planning & Designing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo30" class="collapse" role="tabpanel" aria-labelledby="headingTwo30" data-parent="#accordionEx11">
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
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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
    <div class="card-header" role="tab" id="headingTwo31">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx11" href="#collapseTwo31"
        aria-expanded="false" aria-controls="collapseTwo31">
        <h5 class="mb-0">
          QA Acceptance & System Testing <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo31" class="collapse" role="tabpanel" aria-labelledby="headingTwo31" data-parent="#accordionEx11">
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
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            $question=$re['question'];
            $total_points=$re['Total_Points'];
         
         ?>
            
            
        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="3">
 <?php 
            echo $question;
          ?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="PossibleEvidence"></td>
          <td colspan="1"><select name="Verified">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
          <td colspan="1"><?php echo $total_points;?></td>
          <td colspan="1">2</td>
          <td colspan="1.5" rowspan="1.5" style='width:auto'><input type="text" name="exception"></td>
          <td colspan="1"><input type="text" name="nc"></td>
          <td colspan="1.5" rowspan="1.5" style='height:30px; width:auto'><input type="text" name="observation"></td>
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