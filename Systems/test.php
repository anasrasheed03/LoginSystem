<?php 
include('config/header.php');
?>
<?php

if(isset($_POST['submit'])){
	echo "check"; 
	$location=$_POST['location'];
	echo $location;

}
?>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#demoForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>



<div  id="st1" class="auth-wrapper no-block justify-content-center align-items-center">
	<div class="auth-box">
                
		
	 <div class="row">
	 	<div class="col-2"></div>
                        <div class="col-8">
                        	
	<form class="form-horizontal m-t-10" method="post" enctype="multipart/form-data"  id="demoForm">
		<h3 class="h3 text-center" >Add New Audit Report</h3>
		<div class="tab">
		
			
			<label for="location"><b class="form-control" >Location:</b></label><select id="location" class="form-control form-control-lg" name="location">
				<option value="1">Karachi</option>
				<option value="2">Lahore</option>
			</select>
		
			<label for="competency"><b>Competency</b></label>
			<select name="category" class="form-control form-control-lg">
			    <option value="digital">Digital Framework</option>
			    <option value="developing">Developing</option>
			    <option value="hr"><b>HR</b></option> 
			    
			</select>
		
		
			<label for="tracks"><b>Track</b></label>
			<select name="choices[]" class="form-control form-control-lg" id="choices">
				
			</select>
		
			
				<label for="projectName"><b>Project Name</b></label>
				<input type="text" class="form-control form-control-lg" id="projectName" name="projectName">
		
		
			<label for="NC"><b>Number of NC</b></label>
			<input type="number" class="form-control form-control-lg" id="NC" name="NC">
		
	</div>
	<div class="tab">
    <label for="projectManager"><b>Project Manager</b></label>
			<input type="text" class="form-control form-control-lg" id="projectManager" name="projectManager">
	<label for="Lead"><b>Development Lead</b></label>
			<input type="text" class="form-control form-control-lg" id="Lead" name="Lead">
	<label for="qaLead"><b>QA Lead</b></label>
			<input type="text" class="form-control form-control-lg" id="qaLead" name="qaLead">
	<label for="auditor"><b>Auditor</b></label>
			<input type="text" class="form-control form-control-lg" id="auditor" name="auditor">
	<label for="aduitDate"><b>Number of NC</b></label>
			<input type="date" class="form-control form-control-lg" id="aduitDate" name="aduitDate">
  </div>
	<div class="tab">
    <label for="remarks"><b>Remarks/Comments</b></label>
    <textarea id="remarks" name="remarks" class="form-control form-control-lg" placeholder="Add Remarks about Audit Report"></textarea>
    
  </div>


<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" name="submit" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
<div class="col-2"></div>

</div>
</div>
</div>
</div>
</div>
<br/>
<br/>





<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
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
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("demoForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<script type="text/javascript">
/*
From JavaScript and Forms Tutorial at dyn-web.com
Find information and updates at http://www.dyn-web.com/tutorials/forms/
*/

// removes all option elements in select list 
// removeGrp (optional) boolean to remove optgroups
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

// anonymous function assigned to onchange event of controlling select list
document.forms['demoForm'].elements['category'].onchange = function(e) {
    // name of associated select list
    var relName = 'choices[]';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'choices[]': {
        
        // names match option values in controlling select list
        digital: {
            // optgroup label
            'Free Scripts': {
                text: ['Slider Control', 'Scrollers', 'Banner Rotator'],
                value: ['slider', 'scrollers', 'banner']
            },
            'License': {
                text: ['Scrolling Divs', 'Tooltips', 'Rotate Images'],
                value: ['scroll', 'tooltips', 'rotate']
            }
        },
        developing: {
            // example without optgroups
            text: ['Random Image', 'Rotate Images', 'Form Class', 'Table Class', 'Order Form'],
            value: ['random', 'rotate', 'form', 'table', 'order']
        },
        hr: {
            'Download Demos': {
                // example without values
                text: ['Iframes', 'PHP to JS', 'Unobtrusive JS']
            },
            
            'No Download': {
                text: ['Object Literals', 'Initializing JS', 'JS Errors']
            }
        }
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['demoForm'];
    
    // reference to controlling select list
    var sel = form.elements['category'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'choices[]';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>



<?php include('config/footer.php');?>