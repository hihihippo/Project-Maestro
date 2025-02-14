<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/backend_style.css"/>
	</head>
	<body>
        <!-- Temp -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<a class="navbar-brand" href="javascript:window.location.href=window.location.href">Project Maestro</a>
				<a class="navbar-brand navbar-right" href="login.php">Logout</a>
			</div>
		</nav>
		<div id="view">
            <h3>TEAM TEMP</h3>
            <div id="list">
                <?php
                    $temp = 4; //Swap to get students in team
                    echo "<table width='100%' class='table table-striped'>\n";
                    
                    for ($x = 0; $x <= $temp; $x++) {
                        echo "<tr>";
                        echo "<th>Name " . $x ."</th>";
                        echo '<th>Student #: ' . $x . '</th>';
                        echo "</tr>";
                    }
                    echo "</table>\n";
                ?>
            </div>
			<button id="viewbtn" class="btn btn-small btn-primary"; onclick="window.location.href='./add_members.php'">Add Members</button>
            <button id="viewbtn" class="btn btn-small btn-primary"; onclick="window.location.href='./view_teams.php'">Back</button>  
		</div>
	</body>
</html>