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

        <title>Tutors</title>
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
            
                <h1><u>This table lists all Tutors</u></h1>

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
                        <?php while($trow = mysqli_fetch_array($tutorGet)) { ?>
                                <tr>
                                    <td><?php echo $trow["stdNo"]; ?></td>
                                    <td><?php echo $trow["firstName"]; ?></td>
                                    <td><?php echo $trow["lastName"]; ?></td>
                                    <td><?php echo $trow["institution"]; ?></td>
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
                <input type="text" name="id-create" value="studentno">
                <input type="text" name="firstName" value="name">
                <input type="text" name="lastName" value="lastname">
                <input type="text" name="institution" value="schoolname">
                <button type="submit" name="tutor_create">create</button>
            </form>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id" value="studentno">
                <button type="submit" name="tutor_read">read</button>
            </form>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id" value="studentno">
                <input type="text" name="firstName" value="name">
                <input type="text" name="lastName" value="lastname">
                <input type="text" name="institution" value="schoolname">
                <button type="submit" name="tutor_update">update</button>
            </form>

            <br>
            <br>

            <form action="../includes/index.php" method="POST">
                <input type="text" name="id-delete" value="studentno">
                <button type="submit" name="tutor_delete">delete</button>
            </form>

        </section>

    </body>

</html>