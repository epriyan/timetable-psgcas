<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>

    <link rel="stylesheet" href="timetable.css">
</head>
<body>
    <?php
        session_start();

        $ar1A = $_SESSION['ar1A'];
        $ar1B = $_SESSION['ar1B'];
        $ar2A = $_SESSION['ar2A'];
        $ar2B = $_SESSION['ar2B'];
        $ar3A = $_SESSION['ar3A'];
        $ar3B = $_SESSION['ar3B'];


        echo "<h2 style='font-family: Arial'>B.Sc 1A</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar1A);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar1A[$i]);$j++){
                echo "<td>".$ar1A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h2 style='font-family: Arial'>B.Sc 1B</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar1B);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar1B[$i]);$j++){
                echo "<td>".$ar1B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h2 style='font-family: Arial'>B.Sc 2A</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar2A);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar2A[$i]);$j++){
                echo "<td>".$ar2A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h2 style='font-family: Arial'>B.Sc 2B</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar2B);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar2B[$i]);$j++){
                echo "<td>".$ar2B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h2 style='font-family: Arial'>B.Sc 3A</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar3A);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar3A[$i]);$j++){
                echo "<td>".$ar3A[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";

        echo "<h2 style='font-family: Arial'>B.Sc 3B</h2>";
        echo "<table><thead><tr><th>I Period</th><th>II Period</th><th>III Period</th><th>IV Period</th><th>V Period</th><th>VI Period</th></tr></thead><tbody>";
        for($i=0;$i<count($ar3B);$i++){
            echo "<tr>";
            for($j=0;$j<count($ar3B[$i]);$j++){
                echo "<td>".$ar3B[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<br>";


        $tar1A = $_SESSION['tar1A'];
        $tar1B = $_SESSION['tar1B'];
        $tar2A = $_SESSION['tar2A'];
        $tar2B = $_SESSION['tar2B'];
        $tar3A = $_SESSION['tar3A'];
        $tar3B = $_SESSION['tar3B'];
        
    ?>

    <button class="generate_btn" onclick="allocation()">Generate Again</button>
    <button class="teacher_btn" onclick="teacher()">Teacher Timetable</button>    
    <button class="home_btn" onclick="homepage()">Home</button>    

    
    <script>
        function allocation() {
            window.location.href = "allocation.php";
        }
        function teacher() {
            window.location.href = "teacher.php";
        }
        function homepage() {
            window.location.href = "index.html";
        }
    </script>
</body>
</html>