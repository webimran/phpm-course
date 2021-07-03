<?php

require_once "inc/functions.php";
$task = $_GET['task'] ?? 'report';
$info = '';
$error = '';

if("seed" == $task){
    seed();
    $info = "Seed Sucessfully Complete";
}


if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING); 
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING); 

    if($id){
        // Update Student
        if($id != '' && $fname != '' && $lname != '' && $roll !=''){    
            $error = updateStudent($id, $fname, $lname, $roll);
            if($error){
                header("location: /index.php?task=report");
            }else{
                $error = 1;
            }
            
        }

    }else{
        // Add New Student
        if($fname != '' && $lname != '' && $roll !=''){

            $error = addNewStudent($fname, $lname, $roll);
            if($error){
                header("location: /index.php?task=report");
            }else{
                $error = 1;
            }
            
        }

    }
}

if("delete" == $task){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if(0<$id){
        deleteStudent($id);
        header("location: /index.php?task=report");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Project 2 - CRUD</h2>
                <p>A sample project to perform CRUD operations using plain files and PHP</p>
                <?php include_once('inc/templates/nav.php'); ?>
                <hr />
                <?php
                if ($info != '') {
                    echo "<p>{$info}</p>";
                }
                ?>
                
                <?php if(1 == $error) : ?>
                    <blockquote>
                        Duplicate Roll Number 
                    </blockquote>                       
                <?php endif; ?>
            </div>
        </div>
        <?php if ('report' == $task) : ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <?php generateReport(); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ('add' == $task) : ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form action="/index.php?task=add" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname">

                        <label for="roll">Roll</label>
                        <input type="text" id="roll" name="roll">

                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
        <?php if ('edite' == $task) : 
          $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
          $student = getStudentId($id);
          if($student):
        ?>

            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST">
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $student['fname']; ?>">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" value="<?php echo $student['lname']; ?>">

                        <label for="roll">Roll</label>
                        <input type="text" id="roll" name="roll" value="<?php echo $student['roll']; ?>">

                        <button type="submit" name="submit">Update</button>
                    </form>
                </div>
            </div>
        <?php 
            endif; 
            endif; 
        ?>
    </div>
    <script type="TEXT/JAVASCRIPT" src="/assets/js/scripts.js"></script>
</body>

</html>