<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Data</title>
  <style>
    body {
  font-family: 'Arial', sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

h2 {
  color: #333;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 12px;
  text-align: left;
}

th {
  background-color: #4285f4;
  color: #fff;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f1f1f1;
}

button {
  background-color: #4285f4;
  color: #fff;
  padding: 10px;
  border: none;
  cursor: pointer;
  font-size: 14px;
  margin-right: 5px;
}

button:hover {
  background-color: #cc0000;
}
  </style>
</head>
<body>

  <h2>Data Table</h2>

  <table id="editableTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Desease</th>
        <th>Treatment</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Data rows will be dynamically added here -->
    </tbody>
  </table>

  <button onclick="saveChanges()">Save Changes</button>

  <script>
    function saveChanges() {
      // Get the table reference
      var table = document.getElementById('editableTable');

      // Retrieve the array of data from localStorage
      var allData = JSON.parse(localStorage.getItem('allData')) || [];

      // Iterate through the rows and save changes
      for (var i = 0, row; row = table.rows[i]; i++) {
        // Get the unique identifier from the row
        var rowId = row.getAttribute('data-row-id');

        // Find the corresponding data object
        var dataObject = allData.find(function(data) {
          return data.rowId === rowId;
        });

        // Update the data in the array
        if (dataObject) {
          dataObject.name = row.cells[0].innerText;
          dataObject.email = row.cells[1].innerText;
          dataObject.gender = row.cells[2].innerText;
          dataObject.desease = row.cells[3].innerText;
          dataObject.treatment = row.cells[4].innerText;
        }
      }

      // Update localStorage
      localStorage.setItem('allData', JSON.stringify(allData));

      alert('Changes saved successfully!');
    }

    function editRow(index) {
      // Retrieve the array of data from localStorage
      var allData = JSON.parse(localStorage.getItem('allData')) || [];

      // Get the edited content from the corresponding row
      var editedName = document.getElementById('editableTable').rows[index].cells[0].innerText;
      var editedEmail = document.getElementById('editableTable').rows[index].cells[1].innerText;
      var editedGender = document.getElementById('editableTable').rows[index].cells[2].innerText;
      var editedDesease = document.getElementById('editableTable').rows[index].cells[3].innerText;
      var editedTreatment = document.getElementById('editableTable').rows[index].cells[4].innerText;

      // Update the data in the array
      allData[index].name = editedName;
      allData[index].email = editedEmail;
      allData[index].gender = editedGender;
      allData[index].desease = editedDesease;
      allData[index].treatment = editedTreatment;

      // Update localStorage
      localStorage.setItem('allData', JSON.stringify(allData));

      alert('Row ' + (index + 1) + ' edited successfully!');
    }

    function deleteRow(index) {
      // Retrieve the array of data from localStorage
      var allData = JSON.parse(localStorage.getItem('allData')) || [];

      // Remove the corresponding row from the array
      allData.splice(index, 1);

      // Update localStorage
      localStorage.setItem('allData', JSON.stringify(allData));

      // Refresh the table to reflect the changes
      saveChanges();

      alert('Row ' + (index + 1) + ' deleted successfully!');
    }

    // Retrieve the updated data from localStorage on page load
    var allData = JSON.parse(localStorage.getItem('allData')) || [];
    var table = document.getElementById('editableTable');

    // Iterate through the data and dynamically add rows to the table
    allData.forEach(function (data, index) {
      var row = table.insertRow(index);
      var nameCell = row.insertCell(0);
      var emailCell = row.insertCell(1);
      var genderCell = row.insertCell(2);
      var deseaseCell = row.insertCell(3);
      var treatmentCell = row.insertCell(4);
      var actionCell = row.insertCell(5);

      // Set the content and make it editable
      nameCell.contentEditable = true;
      emailCell.contentEditable = true;
      genderCell.contentEditable = true;
      deseaseCell.contentEditable = true;
      treatmentCell.contentEditable = true;

      nameCell.innerText = data.name;
      emailCell.innerText = data.email;
      genderCell.innerText = data.gender;
      deseaseCell.innerText = data.desease;
      treatmentCell.innerText = data.treatment;

      // Add Edit and Delete buttons
      var editButton = document.createElement('button');
      editButton.innerText = 'Edit';
      editButton.onclick = function() {
        editRow(index);
      };

      var deleteButton = document.createElement('button');
      deleteButton.innerText = 'Delete';
      deleteButton.onclick = function() {
        deleteRow(index);
      };

      actionCell.appendChild(editButton);
      actionCell.appendChild(deleteButton);

      // Set a unique identifier for each row
      row.setAttribute('data-row-id', data.rowId);
    });
  </script>

</body>
</html>