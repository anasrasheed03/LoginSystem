<!DOCTYPE html>
<html>
<?php 
include('config/header.php');
?>
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
    
    $query="INSERT INTO `audit`(`location`,`competency`,`tracks`,`Customer`,`projectName`,`NC`,`projectManager`,`Lead`,`qaLead`,`auditor`,`aduitDate`,`remarks`) VALUES('$location','$competency','$track','$Customer','$projectName','$NC','$projectManager','$Lead','$qaLead','$auditor','$aduitDate','$remarks')";

    $sql=mysqli_query($connect, $query);
    if($sql==true){
    	echo "<script>alert('Report Has been added Successfully');</script>";
    	header('location:index.php');
    }else{
    	echo "<script>alert('Report Not added Successfully');</script>";
    }




}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/auditStyle.css">
<body>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center>
	
<div id="loginform">
<form id="demoForm" method="post">
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
		      <input type="text" class="form-control" id="qaLead" name="qaLead">
		  <label for="auditor"><b>Auditor</b></label>
		      <input type="text" class="form-control" id="auditor" name="auditor">
		  <label for="aduitDate"><b>Audit Date</b></label>
		      <input type="date" class="form-control" id="aduitDate" name="aduitDate">


  </div>
  <div class="tab">
    	<label for="remarks"><b>Remarks/Comments</b></label>
    <textarea id="remarks" name="remarks" row="5" col="40" class="form-control" placeholder="Add Remarks about Audit Report"></textarea>
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
    <em><strong>Step3</strong></em><span class="step"></span>
    
  </div>
</form>
</div>
</div>
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



<?php include('config/footer.php');?>