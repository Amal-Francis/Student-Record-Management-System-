<<<<<<< HEAD
<?php
include "db.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST["age"];
  $course = $_POST['course'];
  $marks = $_POST['marks'];
  $rec = 0;

  $qr = "INSERT INTO student_record(name, age, course, marks, recovery)VALUES('$name', '$age', '$course', '$marks', '$rec')";
  if($conn->query($qr) === TRUE){
    header("Location: Record.php");
  }

}


if(isset($_GET["del_id"])){
  $id = $_GET["del_id"];
  $conn->query("UPDATE student_record SET recovery= 1 WHERE id = '$id'");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Record System</title>
    <style>
      body {
        background-color: rgb(219, 234, 238);
        padding-right: 60px;
        padding-left: 60px;
        padding-bottom: 50px;
        height: auto;
      }
      table {
        border-collapse: collapse;
      
      }
      table,
      td {
        border: 1px solid gray;
        text-align:center;
      }
      tr:nth-child(even) {
  background-color: rgba(180, 173, 173, 0.18);
}

      h1 {
        padding-top: 30px;
        text-align: center;
      }
      .add {
        background-color: rgb(25, 82, 204);
        width: 170px;
        height: 35px;
        border-radius: 5px;
        margin-left: auto; 
        margin-bottom:20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .add a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 35px;
        color: white;
        text-decoration: none;
      }
      th {
        background-color: black;
        color: white;
        padding: 10px;
      }
      td {
  padding: 10px;
}

      .id {
        width: 120px;
      }
      .name {
        width: 300px;
      }
      .age {
        width: 150px;
      }
      .course {
        width: 350px;
      }
      .mark {
        width: 120px;
      }
      .actions {
        width: 350px;
      }

      .action{
        display: block;
      }
      .edit, .delete{
        display: inline-block;
        margin-left:20px;
        padding: 5px 10px;
        text-decoration:none;
        border-radius:3px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .edit{
        background-color: orange;
        color:black;
      }
      .delete{
        background-color:red;
        color:white;
      }
      .recover {
        background-color: rgb(2, 83, 34);
        width: 100px;
        height: 35px;
        border-radius: 5px;
        margin: 20px auto; 
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .recover a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 35px;
        color: white;
        text-decoration: none;
      }

      .recover:hover,
      .add:hover,
      .edit:hover,
      .delete:hover{
        transform: translateY(-4px);
       
        box-shadow: 0 0 10px 4px rgba(0, 123, 255, 0.6);
}
    </style>
  </head>
  <body>
      <h1>🎓 Student Records System</h1>
      <div class="add">
        <a href="Add_Student.php">➕ Add New Student</a>
      </div>
      <table>
          <tr class="th">
            <th class="id">ID</th>
            <th class="name">Name</th>
            <th class="age">Age</th>
            <th class="course">Course</th>
            <th class="mark">Marks</th>
            <th class="actions">Actions</th>
          </tr>
          <?php
              $result = $conn->query("SELECT * FROM student_record WHERE  recovery=0");
              $id = 1;
              while($rows = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$id."</td>
                        <td>".$rows['name']."</td>
                        <td>".$rows['age']."</td>
                        <td>".$rows['course']."</td>
                        <td>".$rows['marks']."</td>
                        
                        <td>
                        <div class = 'action'>
                        <a class= 'edit' href='Edit_Student.php?edit_id=".$rows['id']."'>Edit</a>
                        <a class ='delete' href='Record.php?del_id=".$rows['id']."' onclick = 'return confirm(\"Are you sure to delete\")'>Delete</a></td>
                         </div>
                        </tr>"
                       ;
                       $id++;
              }
          ?>
         
        
      </table>

      <div class="recover">
        <a href="Restore.php">♻️ Restore</a>
      </div>
  </body>
</html>
=======
<?php
include "db.php";

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST["age"];
  $course = $_POST['course'];
  $marks = $_POST['marks'];
  $rec = 0;

  $qr = "INSERT INTO student_record(name, age, course, marks, recovery)VALUES('$name', '$age', '$course', '$marks', '$rec')";
  if($conn->query($qr) === TRUE){
    header("Location: Record.php");
  }

}


if(isset($_GET["del_id"])){
  $id = $_GET["del_id"];
  $conn->query("UPDATE student_record SET recovery= 1 WHERE id = '$id'");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Record System</title>
    <style>
      body {
        background-color: rgb(219, 234, 238);
        padding-right: 60px;
        padding-left: 60px;
        padding-bottom: 50px;
        height: auto;
      }
      table {
        border-collapse: collapse;
      
      }
      table,
      td {
        border: 1px solid gray;
        text-align:center;
      }
      tr:nth-child(even) {
  background-color: rgba(180, 173, 173, 0.18);
}

      h1 {
        padding-top: 30px;
        text-align: center;
      }
      .add {
        background-color: rgb(25, 82, 204);
        width: 170px;
        height: 35px;
        border-radius: 5px;
        margin-left: auto; 
        margin-bottom:20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .add a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 35px;
        color: white;
        text-decoration: none;
      }
      th {
        background-color: black;
        color: white;
        padding: 10px;
      }
      td {
  padding: 10px;
}

      .id {
        width: 120px;
      }
      .name {
        width: 300px;
      }
      .age {
        width: 150px;
      }
      .course {
        width: 350px;
      }
      .mark {
        width: 120px;
      }
      .actions {
        width: 350px;
      }

      .action{
        display: block;
      }
      .edit, .delete{
        display: inline-block;
        margin-left:20px;
        padding: 5px 10px;
        text-decoration:none;
        border-radius:3px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .edit{
        background-color: orange;
        color:black;
      }
      .delete{
        background-color:red;
        color:white;
      }
      .recover {
        background-color: rgb(2, 83, 34);
        width: 100px;
        height: 35px;
        border-radius: 5px;
        margin: 20px auto; 
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .recover a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 35px;
        color: white;
        text-decoration: none;
      }

      .recover:hover,
      .add:hover,
      .edit:hover,
      .delete:hover{
        transform: translateY(-4px);
       
        box-shadow: 0 0 10px 4px rgba(0, 123, 255, 0.6);
}
    </style>
  </head>
  <body>
      <h1>🎓 Student Records System</h1>
      <div class="add">
        <a href="Add_Student.php">➕ Add New Student</a>
      </div>
      <table>
          <tr class="th">
            <th class="id">ID</th>
            <th class="name">Name</th>
            <th class="age">Age</th>
            <th class="course">Course</th>
            <th class="mark">Marks</th>
            <th class="actions">Actions</th>
          </tr>
          <?php
              $result = $conn->query("SELECT * FROM student_record WHERE  recovery=0");
              $id = 1;
              while($rows = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$id."</td>
                        <td>".$rows['name']."</td>
                        <td>".$rows['age']."</td>
                        <td>".$rows['course']."</td>
                        <td>".$rows['marks']."</td>
                        
                        <td>
                        <div class = 'action'>
                        <a class= 'edit' href='Edit_Student.php?edit_id=".$rows['id']."'>Edit</a>
                        <a class ='delete' href='Record.php?del_id=".$rows['id']."' onclick = 'return confirm(\"Are you sure to delete\")'>Delete</a></td>
                         </div>
                        </tr>"
                       ;
                       $id++;
              }
          ?>
         
        
      </table>

      <div class="recover">
        <a href="Restore.php">♻️ Restore</a>
      </div>
  </body>
</html>
>>>>>>> 1d6e5651ebbd81b0c34443a5d4201af261de6cb6
