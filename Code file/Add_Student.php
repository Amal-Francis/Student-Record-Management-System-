<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add</title>

    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: rgb(237, 234, 234);
      }
      h2 {
        text-align: center;
      }

      form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
      }
      .input_style{
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      input,
      a {
        display: block;
        margin-bottom: 20px;
        width: 400px;
        height: 30px;
        border-radius: 5px;
        border: 1px solid gray;

      }
      a {
        text-decoration: none;
        text-align: center;
        padding-top: 5px;
        width: 405px;
        background-color: gray;
        color: white;
      }
      #sub {
        height: 35px;
        width: 405px;
        background-color: darkgreen;
        color: white;
      }
      .cancel{
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .input_style:hover,
      .cancel:hover{
        transform: translateY(-4px);
       
        box-shadow: 0 0 10px 4px rgba(0, 123, 255, 0.6);
      }
    </style>
  </head>
  <body>
    <form action="Record.php" method='post'>
      <h2>➕ Add New Student</h2>
      <div class="inputs">
        <div class= 'input_style'>
        <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="age" placeholder="Age" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="course" placeholder="Course" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="marks" placeholder="Mark" required />
        </div>
        <div class= 'input_style'>
        <input type="submit" value="save" name="submit" id="sub" />
        </div>
      </div>
      <div class="cancel">
        <a href="Record.php">Cancel</a>
      </div>
    </form>
  </body>
</html>
=======
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add</title>

    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: rgb(237, 234, 234);
      }
      h2 {
        text-align: center;
      }

      form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
      }
      .input_style{
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      input,
      a {
        display: block;
        margin-bottom: 20px;
        width: 400px;
        height: 30px;
        border-radius: 5px;
        border: 1px solid gray;

      }
      a {
        text-decoration: none;
        text-align: center;
        padding-top: 5px;
        width: 405px;
        background-color: gray;
        color: white;
      }
      #sub {
        height: 35px;
        width: 405px;
        background-color: darkgreen;
        color: white;
      }
      .cancel{
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .input_style:hover,
      .cancel:hover{
        transform: translateY(-4px);
       
        box-shadow: 0 0 10px 4px rgba(0, 123, 255, 0.6);
      }
    </style>
  </head>
  <body>
    <form action="Record.php" method='post'>
      <h2>➕ Add New Student</h2>
      <div class="inputs">
        <div class= 'input_style'>
        <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="age" placeholder="Age" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="course" placeholder="Course" required />
        </div>
        <div class= 'input_style'>
        <input type="text" name="marks" placeholder="Mark" required />
        </div>
        <div class= 'input_style'>
        <input type="submit" value="save" name="submit" id="sub" />
        </div>
      </div>
      <div class="cancel">
        <a href="Record.php">Cancel</a>
      </div>
    </form>
  </body>
</html>
>>>>>>> 1d6e5651ebbd81b0c34443a5d4201af261de6cb6
