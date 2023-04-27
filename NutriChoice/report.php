<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <style>
      /* Add your CSS styles here */
      
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        background-image : url("imagemr.avif");
	    background-size: cover;
        background-repeat: no-repeat;
      }
      form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        margin-top: 5%;
        background-color: #fff;
        background-color: rgba(255, 255, 255,0.2);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }
      input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
      }
      
      input[type="submit"] , input[type="button"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form method="post" action="reportphp.php">
      <h1>Contact Us</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder=" name">
      <label for="message">Message:</label>
      <input type="text" id="message" name="message" placeholder=" message">
      <input type="submit" value="Submit">
      <a href="main.php"><input type="button" value="BACK"></a>
    </form>
  </body>
</html>