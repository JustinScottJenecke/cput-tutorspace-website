<!DOCTYPE html>
    <html lang="en">

    <?php
        include_once "../includes/index.php";
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../css/theme.css">

        <title>Students</title>
    </head>

    <body>

        <header>
            <div> <a href="../index.html">[*] </a> Tutors Space </div>
        </header>

        <nav id="nav">

            <div class="whitespace">*</div>
            <div> <ul> <a href="./Tutors.php">Tutors</a> </ul> </div>
            <div> <ul> <a href="./Students.php">Students</a> </ul> </div>
            <div> <a href="">About</a> </div>
            <div> <a href="">Contact</a> </div>
            <div> <a href="">Sign In</a> </div>

        </nav>

        <section>
            <div align="center">
            
                <h1><u>This table lists all students</u></h1>

            </div>

            <div>       
                <table style ="width:50%" align="center" border = "1">
                    <thead>
                        <tr>
                            <th>
                                StdNo
                            </th>

                            <th>
                                FirstName
                            </th>

                            <th>
                                LastName
                            </th>

                            <th>
                                Institution
                            </th>
                        </tr>
                    </thead>                  
                    <tbody>
                        <?php while($row = mysqli_fetch_array($studentGet)) { ?>
                                <tr>
                                    <td><?php echo $row["stdNo"]; ?></td>
                                    <td><?php echo $row["firstName"]; ?></td>
                                    <td><?php echo $row["lastName"]; ?></td>
                                    <td><?php echo $row["institution"]; ?></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </section>

        <section>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id" value="enter student no">
                <input type="text" name="firstName" value="enter name">
                <input type="text" name="lastName" value="enter last name">
                <input type="text" name="institution" value="enter school name">
                <button type="submit" name="student_create">create</button>
            </form>

            <br>
            <br>

            <form action="../includes/index.php" method="GET">
                <input type="text" name="id-read" value="enter student no">
                <button type="submit" name="student_read">read</button>
            </form>

                <?php 
                    $readRow = mysqli_fetch_array($studentGet);
                    echo $readRow; 
                ?>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id" value="enter student no">
                <input type="text" name="firstName" value="enter name">
                <input type="text" name="lastName" value="enter last name">
                <input type="text" name="institution" value="enter school name">
                <button type="submit" name="student_update">update</button>
            </form>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id-delete" value="studentno">
                <button type="submit" name="student_delete">delete</button>
            </form>

        </section>

    </body>

</html>
