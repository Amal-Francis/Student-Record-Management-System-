<?php
$success = "";
include "db.php";
if(isset($_GET['edit_id'])){
  $id = $_GET['edit_id'];
  $edit_obj = $conn->query("SELECT * FROM student_record WHERE id=$id");
  $edit_row = $edit_obj->fetch_assoc();
}

if(isset($_POST['update'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $course = $_POST['course'];
  $marks = $_POST['marks'];
  if($conn->query("UPDATE student_record SET name = '$name', age = '$age', course = '$course', marks = '$marks' WHERE id='$id'") === TRUE){
   $success = 1;  
  header("Location: Record.php");
   
  }
  else{
    $success = 0;
  }
  

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit</title>
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
      #up {
        height: 35px;
        width: 405px;
        background-color: orange;
        color: black;
      }
      .error {
        width: 420px;
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        background-color: rgb(255, 230, 230);
        border-left: 5px solid rgb(220, 53, 69);
        color: rgb(167, 29, 42);
}
.input_style{
  border-radius: 5px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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
    
    <form action="" method="post">
      <h2>✏️ Edit Student</h2>
      <div class="inputs">
        <div class="input_style">
        <input type="text" name="name" placeholder="Name" value = "<?php echo $edit_row['name'] ?>" required />
        </div>
        <div class="input_style">
        <input type="text" name="age" placeholder="Age" value = "<?php echo $edit_row['age']?>" required />
        </div>
        <div class="input_style">
        <input type="text" name="course" placeholder="Course" value = "<?php echo $edit_row['course']?>" required />
        </div>
        <div class="input_style">
        <input type="text" name="marks" placeholder="Mark" value = "<?php echo $edit_row['marks']?>" required />
        </div>
        <div class="input_style">
        <input type="submit" value="Update" name="update" id="up" />
        </div>
      </div>
      <div class="cancel">
        <a href="Record.php">Cancel</a>
      </div>

      <?php if($success == 0) { ?>
  <div class="error">
    <?php echo "Updation Faild!"; ?>
  </div>
<?php } ?>
    </form>
  </body>
</html>
