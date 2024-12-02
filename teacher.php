<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>

    <link rel="stylesheet" href="teacher.css">
</head>
<body>
    <?php 
        session_start();

        $tar1A = $_SESSION['tar1A'];
        $tar1B = $_SESSION['tar1B'];
        $tar2A = $_SESSION['tar2A'];
        $tar2B = $_SESSION['tar2B'];
        $tar3A = $_SESSION['tar3A'];
        $tar3B = $_SESSION['tar3B'];

        echo "<h3 style='font-family:Arial'>B.Sc 1A Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar1A);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar1A[$i]);$j++){
                echo "<td>".$tar1A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h3 style='font-family:Arial'>B.Sc 1B Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar1B);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar1B[$i]);$j++){
                echo "<td>".$tar1B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h3 style='font-family:Arial'>B.Sc 2A Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar2A);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar2A[$i]);$j++){
                echo "<td>".$tar2A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h3 style='font-family:Arial'>B.Sc 2B Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar2B);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar2B[$i]);$j++){
                echo "<td>".$tar2B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h3 style='font-family:Arial'>B.Sc 3A Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar3A);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar3A[$i]);$j++){
                echo "<td>".$tar3A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h3 style='font-family:Arial'>B.Sc 3B Teachers</h3>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($tar3B);$i++){
            echo "<tr>";
            for($j=0;$j<count($tar3B[$i]);$j++){
                echo "<td>".$tar3B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";
    ?>

    
    <button class="timetable_btn" onclick="timetable()">Time Table</button>    
    <button class="home_btn" onclick="homepage()">Home</button>    

    
    <script>
        function timetable() {
            window.location.href = "timetable.php";
        }
        function homepage() {
            window.location.href = "index.html";
        }
    </script>     
</body>
</html>
