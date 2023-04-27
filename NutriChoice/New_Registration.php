<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <style>
      /* Add your CSS styles here */
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        background-image: url("imagema.avif");
	    background-size: cover;
        background-repeat: no-repeat;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        margin-top:5%;
        background-color: rgba(255, 255, 255,0.2);
        box-shadow: 0 0 10px rgba(0, 0, 0,0);
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      input[type="submit"],input[type="button"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>NEW REGISTRATION</h1>
    </header>
    <form method="post" action="registration.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <input type="submit" value="Submit">
      <a href="main.php"><input type="button" value="back"></a>
    </form>
  </body>
</html>
