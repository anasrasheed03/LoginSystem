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
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center>
	
<div id="loginform">
<form id="demoForm" style="width:90%" method="post">
   <h3 class="h3 text-center" >Add New Audit Report</h3>
  <div class="tab">
     
      <label for="location"><b>Location:</b></label><select required id="location" class="form-control" name="location">
      	<option  disabled selected value>----Select Location----</option>
        <option value="karachi">Karachi</option>
        <option value="lahore">Lahore</option>
      </select>
    
      <label for="competency"><b>Competency</b></label>
      <select name="competency" required class="form-control">
      	<option  disabled selected value>----Select Competency----</option>
          <option value="digital">Digital Framework</option>
          <option value="developing">Developing</option>
          <option value="hr"><b>HR</b></option> 
          
      </select>
    
    
      <label for="tracks"><b>Track</b></label>
      <select required name="tracks[]" class="form-control" id="tracks">
        
      </select>
    	
    	<label for="customer"><b>Customer</b></label>
        <input required type="text" class="form-control" id="customer" name="customer">
      
        <label for="projectName"><b>Project Name</b></label>
        <input type="text" class="form-control" required id="projectName" name="projectName">
    
    
      <label for="NC"><b>Number of NC</b></label>
      <input type="number" class="form-control" required id="NC" name="NC">
  </div>
  <div class="tab">
    
		<label for="projectManager"><b>Project Manager</b></label>
		      <input type="text" class="form-control" id="projectManager" name="projectManager">
		  <label for="Lead"><b>Development Lead</b></label>
		      <input type="text" class="form-control" id="Lead" name="Lead">
		  <label for="qaLead"><b>QA Lead</b></label>
		      <input type="text" class="form-control" required id="qaLead" name="qaLead">
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
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-management-tab" data-toggle="tab" href="#nav-management" role="tab" aria-controls="nav-management" aria-selected="true">Project Management</a>
            <a class="nav-item nav-link" id="nav-Software-tab" data-toggle="tab" href="#nav-Software" role="tab" aria-controls="nav-Software" aria-selected="false">Software Engineering</a>
            <a class="nav-item nav-link" id="nav-Development-tab" data-toggle="tab" href="#nav-Development" role="tab" aria-controls="nav-Development" aria-selected="false">Development</a>
            <a class="nav-item nav-link" id="nav-Quality-Assurance-tab" data-toggle="tab" href="#nav-Quality-Assurance" role="tab" aria-controls="nav-Quality-Assurance" aria-selected="false">Quality Assurance</a>
           
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-management" role="tabpanel" aria-labelledby="nav-management-tab">
            


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
         
         if($res>1){
          while($re=mysqli_fetch_assoc($find)){
            $sr++;
            
            $qid=$re['question_id'];
            $question=$re['question'];
            $total_points=$re['Total_Points'];
            $a_points=$total_points;


         
         ?>
       

        <div class="row">
          <tr>

          <td colspan="1"><?php echo $sr; ?></td>
           
          <td colspan="5">
          <input type="text" readonly="" hidden name="quesid[]"  value="<?php echo htmlspecialchars($qid);?>" >
          <?php echo $question;?>
          </td>
          
          <td colspan="1" style='width:auto'><input type="text" name="Evidence[]"></td>
          <td colspan="1"><select onchange="val()" id="Verified" name="Verified[]">
              <option value="yes" >Yes</option>
              <option value="no">No</option>
              <option value="n/a">N/A</option>
          </select></td>
        <!--   <td colspan="1" name="TotalPoints[]" value="<?php echo $total_points;?>" id="total_points[<?php echo $sr; ?>]"><?php echo htmlspecialchars($total_points);?></td> -->
        <td colspan="1"><input type="text"  readonly="" name="TPoints[]" value="<?php echo htmlspecialchars($total_points);?>"  id="total_points<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>
         <!--  <td colspan="1" name="AttainedPoints[]" value="<?php echo $total_points;?>" id="Attained[<?php echo $sr; ?>]" ><?php echo $total_points;?></td> -->
         <td colspan="1"><input type="text" readonly="" name="APoints[]" value="<?php echo htmlspecialchars($a_points);?>" id="Attained<?php echo $sr; ?>" onClick="reply_click(this.id)"></td>

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
    <em><strong>Step4</strong></em><span class="step"></span>
    
    
  </div>
</form>
</div>
</div>


<script type="text/javascript">
function reply_click(clicked_id)
{
    alert(clicked_id);
}
</script>

    <script>
  
function val() {

  
    d = document.getElementById("Verified").value;
    console.log(d);
    if(d==='yes'){
      for(i=1;i<=<?php echo $res;; ?>;i++){
    console.log(i);
        document.getElementById('Attained[i]').innerHTML='<?php echo $total_points;?>';
        document.getElementById('total_pointsi').innerHTML='<?php echo $total_points;?>';    
        }else if(d==='no'){
        document.getElementById('total_pointsi').innerHTML='<?php echo $total_points;?>';  
        document.getElementById('Attainedi').innerHTML='0';

        }else if(d==='n/a'){
        document.getElementById('total_pointsi').innerHTML='0';
        document.getElementById('Attainedi').innerHTML='0';
        }
}

}
</script> 
            

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
  if (n == 1 && !validateForm()) return false;
 
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
    $questionid=$_REQUEST['quesid'];
    $Evidence=$_REQUEST['Evidence'];
    $Verified=$_REQUEST['Verified'];
    $TotalPoints=$_REQUEST['TPoints'];
    $AttainedPoints=$_REQUEST['APoints'];
    $exception=$_REQUEST['exception'];
    $nc=$_REQUEST['nc'];
    $observation=$_REQUEST['observation'];

    

      
        

$query="INSERT INTO `audit`(`location`,`competency`,`tracks`,`Customer`,`projectName`,`Total_NC`,`projectManager`,`Lead`,`qaLead`,`auditor`,`aduitDate`,`remarks`) VALUES('$location','$competency','$track','$Customer','$projectName',$NC,'$projectManager','$Lead','$qaLead','$auditor','$aduitDate','$remarks')";
    $sql=mysqli_query($connect, $query);
        if($sql==true){
         $last_id = mysqli_insert_id($connect);
$j=0;
while($j<count($Evidence)){
  
            $query1="INSERT INTO `check_list`(`Query`, `Evidence`, `Verified`, `Total_Points`, `Points_Attained`, `Exception_Deviation`, `NC`, `Observation`, `report_id`) VALUES('$questionid[$j]','$Evidence[$j]','$Verified[$j]','$TotalPoints[$j]','$AttainedPoints[$j]','$exception[$j]','$nc[$j]','$observation[$j]',$last_id);";
  
  
       $j++;
    if(mysqli_query($connect, $query1)){

      
    }
}echo "<script>alert('Report Has been added Successfully');</script>";

        header('location:index.php');
        }
        
        else{
        echo "<script>alert('Report Not added Successfully');</script>";
        }
    



     







}
?>



<?php include('config/footer.php');?>