<?php
    include_once "5.3.f.php";

    $task = $_GET['task'] ?? 'encode';
    $key    = 'abcdefghijklmnopqrstuvwxyz1234567890';
    if('key' == $task){
        $orginalKey = str_split($key);
        shuffle($orginalKey);
        $key = join('',$orginalKey);
    }elseif(isset($_POST['key']) && $_POST['key'] !=''){
        $key = $_POST['key'];
    }

    $scrambledData = '';

    if('encode' == $task){
        $data = $_POST['data'] ?? '';
        if($data != ''){
          $scrambledData = scrambledData($data, $key);  
        }
    }
    if('decode' == $task){
        $data = $_POST['data'] ?? '';
        if($data != ''){
          $scrambledData = decodeData($data, $key);  
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
            #data,
            #result{
                width: 100%;
                height: 160px;
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
                    <p>
                        <a href="/5.3.php?task=encode">Encode</a> | 
                        <a href="/5.3.php?task=decode">Decode</a> |
                        <a href="/5.3.php?task=key">Generate Key</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form action="5.3.php<?php if('decode' == $task){ echo "?task=decode"; } ?>" method="POST">
                        <label for="key">Key</label>
                        <input type="text" name="key" id="key" <?php displayKey($key); ?> >
                        <label for="data">Data</label>
                        <textarea name="data" id="data"><?php if(isset($_POST['data']) && $_POST['data'] != ''){ echo $_POST['data']; }?></textarea>
                        <label for="data">Result</label>
                        <textarea name="result" id="result"><?php echo $scrambledData; ?></textarea>
                        <button type="submit">Do it For Me</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>