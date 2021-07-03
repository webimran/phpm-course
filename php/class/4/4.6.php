<?php
    if(isset($_FILES['photos'])){
        $allowfileTypes = [
            // images
            'image/png',
            'image/jpeg',
            'image/jpeg',
            'image/jpeg',
            'image/gif',
            'image/bmp',
            'image/vnd.microsoft.icon',
            'image/tiff',
            'image/tiff',
            'image/svg+xml',
            'image/svg+xml',
        ];
        if(in_array($_FILES['photos']['type'], $allowfileTypes)  !==false && $_FILES['photos']['size']<5*1024*1024){
            move_uploaded_file($_FILES['photos']['tmp_name'],'upload/'.$_FILES['photos']['name']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> 4.1 PHP </title>
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

        <!-- CSS Reset -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

        <!-- Milligram CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

        <!-- You should properly set the path from the main file. -->
        <style>
            body{
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <!-- `.container` is main centered wrapper -->
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h1>Hello World</h1>
                    <p>Learn PHP with Hasin Hyder</p>
                    <?php
                        $fname = '';
                        $lname = '';
                        $sfruit = $_POST['fruits'] ?? array();

                        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                           // $fname = htmlspecialchars( $_REQUEST['fname']);
                           $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
                        }
                        if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                            // $lname = htmlspecialchars($_REQUEST['lname']);
                            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                        }
                    ?>
                    
                    <p>
                        First Name: <?php echo $fname;?> <br>
                        Last Name: <?php echo $lname;?><br>
                    </p>

                    <pre>
                        <?php 
                            print_r($_POST);
                            print_r($_FILES);
                        ?>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">

                        <label for="photos">Photos</label>
                        <input type="file" id="photos" name="photos" >
                        
                        <br>
                        

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>