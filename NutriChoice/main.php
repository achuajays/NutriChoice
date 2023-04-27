<!DOCTYPE html>
<html>
  <head>
    <title>Food Safety</title>

    <style>
      /* Add your CSS styles here */

      body {
        font-family: Arial, sans-serif;
        background-image: url("image.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
      }

      nav li {
        margin: 0 10px;
      }

      nav a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
      }

      main {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        margin-top: 5%;
        background-color: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }

      p {
        font-size: 18px;
        line-height: 1.5;
      }

    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="New_Registration.php">New Registration</a></li>
          <li><a href="search.php">SCEARCH</a></li>
          <li><a href="report.php">REPORT</a></li>
          <li><a href="login.php"><?php session_start(); echo  $_SESSION['user'];?></a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Food Safety</h1>
      <br>
      <br>

      <p>Food safety refers to the measures taken to ensure that food is safe to eat. This includes everything from proper food handling and preparation techniques to ensuring that food is stored and transported at the right temperature. Foodborne illnesses can be caused by bacteria, viruses, parasites, and other harmful substances that can contaminate food. It's important to practice good food safety habits to prevent these illnesses and keep yourself and others healthy.</p>
    </main>
  </body>
</html>