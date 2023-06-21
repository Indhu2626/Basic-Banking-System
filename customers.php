<!DOCTYPE html>
<html>
<head>
  <title>Customer List</title>
  <style>
    /* CSS styles for the navigation bar */
    ul.navbar {
      box-shadow:1px 1px 2px black;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: rgbrgb(51 205 242 / 50%);
    }
    
    ul.navbar li {
      float: center;
    }
    
    ul.navbar li a {
      display: block;
      color: black;
      text-align: center;
      padding: 10px 30px;
      text-decoration: none;
    }
    
    ul.navbar li a:hover {
      background-color: rgba(54,240,139,40);
    }
    
    /* CSS styles for the table */
    table {
      border-collapse: collapse;
      width: 105%;
    }
    
    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 3px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    a {
      background-color:rgb(51 205 242 / 50%);
      color:black;
      padding:3px 3px;
      border-radius:5px;
    }
    div {
          text-align: center;
      }
      h1 {
          background:rgb(51 205 242 / 50%);
          font-size:40px;
          text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
          color:black;
          text-align:center;
          display: inline-block;
          padding:5px;
          border-radius:4px;
      }
  </style>
</head>
<body>
  <!-- Navigation bar -->
  <ul class="navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="customers.php">Customers</a></li>
    <li><a href="transactions.php">Transactions</a></li>
  </ul>
  <div>
  <h1>Customers</h1>
  
  <!-- PHP code for retrieving and displaying data -->
  <?php
  // Replace with your MySQL connection details
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bankrecords";
  
  // Create a new MySQLi object
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL query to retrieve data from the database
  $sql = "SELECT * FROM customers";
  
  // Execute the query and get the result
  $result = $conn->query($sql);
  
  // Check if any rows are returned
  if ($result->num_rows > 0) {
    // Output data in a table format
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Balance</th><th> </th></tr>";

    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["balance"] . "</td>";
      echo "<td><a href='details.php?id=" . $row["id"] . "'>Details</a></td>";
      echo "</tr>";
    }
    
    echo "</table>";
  } else {
    echo "No customers found.";
  }
  
  // Close the database connection
  $conn->close();
  ?>
  </div>
</body>
</html