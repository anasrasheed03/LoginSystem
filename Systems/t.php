<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>test</title>
</head>
<body>  
      <form action="process" class="register" method="POST">
          <h1>Add Participants</h1>

          <fieldset class="row2">
              <legend>List of Participants</legend>
              <p> 
                  <input type="button" value="Add Participant" onClick="addRow('dataTable')" /> 
                  <input type="button" value="Clear Participants" onClick="deleteRow('dataTable')"  /> 
                  <p>(All acions apply only to entries with check marked check boxes only.)</p>
              </p>
             <table id="dataTable" class="form" border="1">
                <tbody>
                  <tr>
                    <p>
                      <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
                      <td>
                          <div>Participant: </div>
                          <select name="participant1" id="participant1">
                              <option>Person A</option>
                          <option>Person B</option>
                          <option>Person C</option>
                              </select>
                       </td>
            </p>
                  </tr>
                  </tbody>
              </table>
              <div class="clear"></div>
          </fieldset>


          <input class="submit" type="submit" value="Confirm &raquo;" />
          <div class="clear"></div>
      </form>

      <script>
      var j=1;
      function addRow(tableID) {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;
      if(rowCount < 50){                          
          var row = table.insertRow(rowCount);
          var colCount = table.rows[0].cells.length;
          for(var i=0; i<colCount; i++) {
              var newcell = row.insertCell(i);
              newcell.id="participant"+ j;
              newcell.innerHTML = table.rows[0].cells[i].innerHTML;
              j++;
          }
      }else{
           alert("More than 50 Participants? Are you sure?");

      }
      }

      </script>
</body>
</html>