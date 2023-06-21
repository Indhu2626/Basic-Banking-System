<!DOCTYPE html>
<html>
<head>
  <title>Basic Banking site</title>
  <style>
    body {
      background-image: url("mobilebanking.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 80vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: times new roman, sans-serif;
    }
    .container {
      text-align: center;
    }
    h1 {
      color: black;
      font-size: 48px;
      padding:2px 2px;
      margin-bottom: 50px;
      text-shadow: none;
      border-radius: 4px;
    }
    .button {
      box-shadow: 1px 1px 3px rgb(198, 157, 247);
      display: inline-block;
      background-color: #00a8ff6e;
      color: black;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 22px;
      margin: 15px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
   </body>
  <div class="container">
    <h1>Welcome to GripPay</h1>
    <a href="customers.php" class="button">View Customers</a>
    <a href="transactions.php" class="button">View Transactions</a>
  </div>
</body>
</html>