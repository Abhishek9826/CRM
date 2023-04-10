<style>

/* Light mode styles */
table {
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #007bff;
  color: white;
}

tr:hover {
  background-color: #FFF4E0;
}

/* Dark mode styles */
@media (prefers-color-scheme: dark) {
  table {
    color: #f1f1f1;
  }

  th {
    background-color: #0d6efd;
  }

  tr:hover {
    background-color: #3a3a3a;
  }
}

/* Light mode specific styles */
body.light table {
 
  color: #212529;
}

body.light th {
  background-color: #007bff;
  color: white;
}

body.light tr:hover {
  background-color: #FFF4E0;
}

/* Dark mode specific styles */
body.dark table {
  color: #f1f1f1;
}

body.dark th {
  background-color: #0d6efd;
}

body.dark tr:hover {
  background-color: #3a3a3a;
}

</style>

<?php
// get the search term from the query string
$searchTerm = $_GET['q'];

// perform a search and return a list of suggestions
$suggestions = array();
if (strlen($searchTerm) >= 1) {
  // connect to the database (replace the placeholders with your database details)
  $dbHost = 'localhost';
  $dbName = 'test';
  $dbUser = 'root';
  $dbPass = '';
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

  // prepare and execute a database query
  $stmt = $db->prepare("SELECT * FROM gst_data WHERE legal_name  LIKE :searchTerm or business_name  LIKE :searchTerm or pan_number  LIKE :searchTerm or gstin  LIKE :searchTerm or client_id  LIKE :searchTerm or email  LIKE :searchTerm ");
  $stmt->execute(array(':searchTerm' => "%$searchTerm%"));

  // fetch the results and add them to the suggestions array
  while ($row = $stmt->fetch()) {
    $suggestions[] = array(
      'legal_name' => $row['legal_name'],
      'business_name' => $row['business_name'],
      'pan_number' => $row['pan_number'],
      'gstin' => $row['gstin'],
      'client_id' => $row['client_id'],
      'email' => $row['email']
    );
  }
}
if (!empty($suggestions)) {
  echo '<table>';
  echo '<thead><tr><th>Legal Name</th> <th>Business Name </th> <th>email</th>  </tr></thead>';
  echo '<tbody>';
  foreach ($suggestions as $suggestion) {
   
    echo "<tr onclick='document.location=\"view_clients.php?client_id={$suggestion['client_id']}\"' class='table_row'>";
    echo "<td> <a href='Client.php?client_id={$suggestion['client_id']}' data-client-id='{$suggestion['client_id']}' style='text-decoration: none;'>{$suggestion['legal_name']}</a> </td>";
    
    echo '<td>';
    echo '<table>';
    echo '<tr>';
    echo "<td><option value='{$suggestion['business_name']}'>{$suggestion['business_name']}.</option></td>";
    echo '</tr>';
    echo '<tr>';
    echo '</tr>';
    echo '</table>';
    echo '</td>';
    echo '<td>';
    echo '<table>';
    echo '<tr>';
    echo "<td>  <option value='{$suggestion['email']}'>{$suggestion['email']}.</option></td>";
    echo '</tr>';
    
    echo '<tr>';   
    echo '</tr>';
    echo '</table>';
    
    echo '</tr>';
   
    echo "</a>";
  
  }
  echo '</tbody>';
  echo '</table>';
}

?>