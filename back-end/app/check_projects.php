<!DOCTYPE html>
<?php 
include_once('../db/inc_db_helper.php');
session_start();
if(isset($_SESSION['instructor_id'])){
?>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/add_course_std.css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:window.location.href=window.location.href">Project Maestro</a>
            <a class="navbar-brand navbar-right" href="logout.php">Logout</a>
        </div>
    </nav>
    <h1 class="courseInfo">Project Outline</h1>
    <div class="col-md-3"></div>
    <table class="tableList">
        <?php 
        $db = new DatabaseHelper('../db/projectmaestro.db');
        $connection = $db->getConn();
        $res = $connection->query('SELECT * FROM ProjectOutline');
        // Change this to the passed course id
        $courseId = $_GET['id']; //gets the course id from ViewCourse page
        while ($row = $res->fetchArray()) {
                    $rowCourseId = $row['CourseId'];
                    // echo"$rowCourseId";
                    if($courseId == $rowCourseId) {
                        $outlineId = $row['ProjectOutlineId'];
                        echo "<tr><td>{$row['ProjectOutlineName']}</td>";
                        echo "<td class='alignRight'>";
                        echo "<a href='view_projects.php?crsId=$courseId&outlineId=$outlineId'>";
                        echo "<input type='button' value='View Details' class='homebutton addBtn' id='viewDet'/>";
                        echo "</td>";
                        echo "</tr>";
                    }
        };
        ?>
    </table>
    <?php 
        echo"<a href='create_project_outline.php?crsId=$courseId'>";
        echo "<input type='button' value='Create Projects' class = 'homebutton createProj addBtn' id ='createProj'";
    ?>
    </div>
    <?php    
    } else {
      $_SESSION['require_login_error'] = "Restricted Access, please login to access.";
      if (isset($_SESSION['require_login_error'])){
        header('Location: ../index.php');
        exit();
      }
    }
     ?>
</body>

</html>