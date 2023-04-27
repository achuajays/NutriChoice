<!DOCTYPE html>
<html>
  <head>
    <title>Search Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
        background-image: url("imagems.avif");
	    background-size: cover;
        background-repeat: no-repeat;
      }
      
      h1 {
        text-align: center;
        margin-top: 20px;
      }
      
      form {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        background-color: rgba(255, 255, 255,-1);
      }
      
      label {
        font-weight: bold;
        margin-right: 10px;
      }
      
      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ddd;
        border-radius: 4px;
      }
      
      button[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      button[type="submit"]:hover {
        background-color: #3e8e41;
      }
      
      p {
        margin-top: 50px;
        text-align: center;
        font-size: 18px;
      }

      input[type="submit"],input[type="button"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>Search Page</h1>
    <form action="searchphp.php" method="post">
      <label for="search">Search:</label>
      <input type="text" id="search" name="n">
      <button type="submit">Search</button>
      <a href="main.php"><input type="button" value="back"></a>
    </form>
   
  </body>
</html>