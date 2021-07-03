<?php
define('DATA_FILE', 'inc\db.txt');

function seed(){
    $data           = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11'
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '12'
        ),
        array(
            'id'    => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll'  => '9'
        ),
        array(
            'id'    => 4,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll'  => '8'
        ),
        array(
            'id'    => 5,
            'fname' => 'John',
            'lname' => 'Rozario',
            'roll'  => '7'
        ),
    );
    $serliseData = serialize($data);
    file_put_contents(DATA_FILE, $serliseData, LOCK_EX);
}

function generateReport(){
    $students = file_get_contents(DATA_FILE);
    $students = unserialize($students);

    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th width="25%">Action</th>
        </tr>
   
    <?php
    foreach($students as $student){
      ?>
        <tr>
            <td><?php printf("%s %s", $student['fname'], $student['lname'])?></td>
            <td><?php printf("%s", $student['roll'])?></td>
            <td><?php printf("<a href='/index.php?task=edite&id=%s'>Edite</a> | <a class='delete' href='/index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id'])?></td>
        </tr>
      <?php
    }
    ?>
    </table>
    <?php
}

function addNewStudent($fname, $lname, $roll){
    $found = false;
    $students = file_get_contents(DATA_FILE);
    $students = unserialize($students);
    foreach($students as $_student){
        if($_student['roll'] == $roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $newId = newStudentId($students);
        $student= array(
            'id' => $newId,
            'fname' =>  $fname,
            'lname' => $lname,
            'roll'  => $roll

        );

        array_push($students, $student);
        $serliseData = serialize($students);
        file_put_contents(DATA_FILE, $serliseData, LOCK_EX);
        return true;
    }

    return false;

}

function getStudentId($id){
    $students = file_get_contents(DATA_FILE);
    $students = unserialize($students);
    foreach($students as $student){
        if($id == $student['id']){
            return $student;
        }
    }
    return true;
}
function updateStudent($id, $fname, $lname, $roll){
    $found = false;
    $students = file_get_contents(DATA_FILE);
    $students = unserialize($students);
    foreach($students as $student){
        if($student['roll'] == $roll && $student['id'] != $id){
            $found = true;
            break;
        }
    }
    if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;
        $serliseData = serialize($students);
        file_put_contents(DATA_FILE, $serliseData, LOCK_EX);
        return true;
    }

    return false;

}
function deleteStudent($id){
    $students = file_get_contents(DATA_FILE);
    $students = unserialize($students);
    foreach($students as $offset => $student){
        if($student['id'] == $id){
           unset($students[$offset]);
        }
    }
	$serializedData               = serialize( $students );
	file_put_contents( DATA_FILE, $serializedData, LOCK_EX );
}
function newStudentId($students){
    $maxId = max(array_column($students, "id"));
    return $maxId+1;
}


