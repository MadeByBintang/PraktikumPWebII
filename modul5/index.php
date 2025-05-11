<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Menu Buku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to bottom left, #DAF0F6, #DEF0FF, #C7DEF8, #85B7F1, #73AFF6);
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      width: 60%;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
    }

    .header {
      padding: 10px 20px;
      background-color: #F7F7F7;
      border-bottom: 1px solid #E0E0E0;
    }

    .header h3 {
      margin: 20px 0;
      font-size: 25px;
      color: black;
    }

    .menu {
      padding: 30px;
    }

    .menu a {
      display: block;
      margin: 15px auto;
      padding: 12px;
      width: 80%;
      background-color: #73AFF6;
      color: white;
      font-size: 16px;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .menu a:hover {
      background-color: #5a96d6;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h3>MENU BUKU</h3>
    </div>
    <div class="menu">
      <a href="Member.php">Member</a>
      <a href="Buku.php">Buku</a>
      <a href="Peminjaman.php">Peminjaman</a>
    </div>
  </div>
</body>

</html>