<?php
include "db.php";
if(isset($_GET['recover_id'])){
    $id = $_GET["recover_id"];
    $conn->query("UPDATE student_record SET recovery = 0 WHERE id = '$id'");
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
        width:100%;
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
      .back {
        background-color: rgb(25, 82, 204);
        width: 120px;
        height: 35px;
        border-radius: 5px;
        margin-left: auto; 
        margin-bottom:20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }

      .back a {
        display: inline-block;
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
        padding: 10px

        
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
      
      .restore{
        display:inline-block;
        margin-left:20px;
        padding: 5px 10px;
        text-decoration:none;
        border-radius:3px;
         background-color:  rgb(40, 167, 69);
        color:white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      .restore:hover, 
      .back:hover {
        transform: translateY(-4px);
       
        box-shadow: 0 0 10px 4px rgba(0, 123, 255, 0.6);
}

    </style>
  </head>
  <body>
      <h1>🎓 Student Records System</h1>
      <div class="back">
        <a href="Record.php"> Back</a>
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
              $result = $conn->query("SELECT * FROM student_record WHERE  recovery=1");
              while($rows = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$rows['id']."</td>
                        <td>".$rows['name']."</td>
                        <td>".$rows['age']."</td>
                        <td>".$rows['course']."</td>
                        <td>".$rows['marks']."</td>
                        
                        <td>
                        <div class = 'action'>
                        <a class= 'restore' href='Restore.php?recover_id=".$rows['id']."'>🔄 Recover</a>
                        </td>
                         </div>
                        </tr>"
                       ;
              }
          ?>
         
      </table>

  </body>
</html>
