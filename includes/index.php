<?php

include_once "dbConn.php";

/*
                        <?php while($row = mysqli_fetch_array($studentGet)) { ?>
                                <tr>
                                    <td><?php echo $row["stdNo"] ?></td>
                                    <td><?php echo $row["firstName"] ?></td>
                                    <td><?php echo $row["lastName"] ?></td>
                                    <td><?php echo $row["institution"] ?></td>
                                </tr>
                        <?php } ?>
*/ 

/*========================================================Students==================================================*/

    $studentGet = mysqli_query($dbConn, "SELECT * FROM student;");
    $resultCheck = mysqli_num_rows($studentGet);
    if ($resultCheck = 0){
        echo "no data error";
    }


    if (isset($_POST["student_create"])){
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $institution = $_POST["institution"];
        
        $query = "INSERT INTO student(stdNo, firstName, lastName, institution) VALUES ('$id','$firstName', '$lastName', '$institution')";

        mysqli_query($dbConn, $query);
        header("location: ../html/Students.php");
    }


    if (isset($_GET["student_read"])){
        $id = $_GET["id-read"];
        
        $query = "SELECT FROM student WHERE stdNo = $id";

        if (mysqli_query($dbConn, $query)){
            header("location: ../html/Students.php");
        } else {
            echo "error ".mysqli_error($dbConn);
        }
    }


    if (isset($_POST["student_delete"])){
        $id = $_POST["id-delete"];
        
        $query = "DELETE FROM student WHERE stdNo = $id";
        if (mysqli_query($dbConn, $query)){
            header("location: ../html/Students.php");
        } else {
            echo "error ".mysqli_error($dbConn);
        }

    }


    /*========================================================Tutors==================================================*/


    $tutorGet = mysqli_query($dbConn, "SELECT * FROM tutor;");
    $tutorresultCheck = mysqli_num_rows($tutorGet);
    if ($tutorresultCheck = 0){
        echo "no data error";
    }


    if (isset($_POST["tutor_create"])){
        $id = $_POST["id-create"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $institution = $_POST["institution"];
        
        $query = "INSERT INTO tutor(stdNo, firstName, lastName, institution) VALUES ('$id','$firstName', '$lastName', '$institution')";

        mysqli_query($dbConn, $query);
        header("location: ../html/Tutors.php");
    }



    if (isset($_POST["tutor_delete"])){
        $id = $_POST["id-delete"];
        
        $query = "DELETE FROM tutor WHERE stdNo = $id";
        if (mysqli_query($dbConn, $query)){
            header("location: ../html/Tutors.php");
        } else {
            echo "error ".mysqli_error($dbConn);
        }

    }