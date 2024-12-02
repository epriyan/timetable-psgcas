<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocation Page</title>
    
</head>
<body>
    <?php
        $u = "root";
        $pass="epriyan";
        $ser = "localhost";

        try{
            $conn = mysqli_connect($ser,$u,$pass);
            if($conn->connect_error){
                echo "Failed";
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        
        $db = "timetable";
        $conn->select_db($db);

        //1A
        $ar1A = [['1AC','1AEnglish','1AFDC','-','1AFrench','1AMaths'],
                 ['1AFrench','1AEnglish','-','1ACLab','1ACLab','1ACLab'],
                 ['1AEnglish','1AFDC','1AC','-','1AFrench','1AMaths'],
                 ['1AFrench','1AEnglish','-','1AExcelLab','1AExcelLab','1AExcelLab'],
                 ['1AFDC','1AC','1AFrench','-','1AEnglish','1AMaths'],
                 ['1AC','1AEnglish','1AFrench','-','1AMaths','1AFDC']];
        
        $tar1A = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];

        //1A 4hours theory
        $q1 = "SELECT * FROM 1a_theory_4hours WHERE SPID='1AFDC'";
        $result = $conn->query($q1);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AFDC"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b; 
                }
            }
        }


        $q2 = "SELECT * FROM 1a_theory_4hours WHERE SPID='1AC'";
        $result = $conn->query($q2);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AC"){ 
                    $ar1A[$i][$j] = $a; 
                    $tar1A[$i][$j] = $b;
                }
            }
        }


        $q3 = "SELECT * FROM 1a_theory_4hours WHERE SPID='1AMaths'";
        $result = $conn->query($q3);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AMaths"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b;
                }
            }
        }

        //1A 3hours lab
        $q4 = "SELECT * FROM 1a_lab_3hours WHERE SPID='1ACLab'";
        $result = $conn->query($q4);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1ACLab"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b;
                }
            }
        }


        $q5 = "SELECT * FROM 1a_lab_3hours WHERE SPID='1AExcelLab'";
        $result = $conn->query($q5);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AExcelLab"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b;
                }
            }
        }

        //1A language 6hours
        $q6 = "SELECT * FROM 1a_language_6hours WHERE SPID='1AFrench'";
        $result = $conn->query($q6);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AFrench"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b;
                }
            }
        }

        $q7 = "SELECT * FROM 1a_language_6hours WHERE SPID='1AEnglish'";
        $result = $conn->query($q7);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1A);$i++){
            for($j=0;$j<count($ar1A[$i]);$j++){
                if($ar1A[$i][$j]=="1AEnglish"){ 
                    $ar1A[$i][$j] = $a;
                    $tar1A[$i][$j] = $b;
                }
            }
        }


        //1B
        $ar1B = [['1BFDC','1BEnglish','1BMaths','-','1BFrench','1BFDC'],
                 ['1BFrench','1BEnglish','-','1BExcelLab','1BExcelLab','1BExcelLab'],
                 ['1BEnglish','1BC','1BMaths','-','1BFrench','1BC'],
                 ['1BFrench','1BEnglish','-','1BCLab','1BCLab','1BCLab'],
                 ['1BC','1BFDC','1BFrench','-','1BEnglish','1BMaths'],
                 ['1BFDC','1BEnglish','1BFrench','-','1BC','1BMaths']];
        
        $tar1B = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];

        
        //1B 4hours theory
        $q8 = "SELECT * FROM 1b_theory_4hours WHERE SPID='1BFDC'";
        $result = $conn->query($q8);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BFDC"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b; 
                }
            }
        }


        $q9 = "SELECT * FROM 1b_theory_4hours WHERE SPID='1BC'";
        $result = $conn->query($q9);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BC"){ 
                    $ar1B[$i][$j] = $a; 
                    $tar1B[$i][$j] = $b;
                }
            }
        }


        $q10 = "SELECT * FROM 1b_theory_4hours WHERE SPID='1BMaths'";
        $result = $conn->query($q10);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BMaths"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b;
                }
            }
        }

        //1B 3hours lab
        $q11 = "SELECT * FROM 1b_lab_3hours WHERE SPID='1BCLab'";
        $result = $conn->query($q11);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BCLab"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b;
                }
            }
        }


        $q12 = "SELECT * FROM 1b_lab_3hours WHERE SPID='1BExcelLab'";
        $result = $conn->query($q12);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BExcelLab"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b;
                }
            }
        }

        //1B language 6hours
        $q13 = "SELECT * FROM 1b_language_6hours WHERE SPID='1BFrench'";
        $result = $conn->query($q13);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BFrench"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b;
                }
            }
        }

        $q14 = "SELECT * FROM 1b_language_6hours WHERE SPID='1BEnglish'";
        $result = $conn->query($q14);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar1B);$i++){
            for($j=0;$j<count($ar1B[$i]);$j++){
                if($ar1B[$i][$j]=="1BEnglish"){ 
                    $ar1B[$i][$j] = $a;
                    $tar1B[$i][$j] = $b;
                }
            }
        }


        //2A
        $ar2A = [['2ADBMSLab','2ADBMSLab','2AStat','-','2AEnglish','2ADBMS'],
                 ['2AStat','2ADBMS','2AFrench','-','2ADBMS','2AJava'],
                 ['2AStat','2AFrench','2AJava','-','2AEnglish','2AOS'],
                 ['2AOS','2ADBMS','2AJava','-','2AFrench','2AJava'],
                 ['2AFrench','2AEnglish','2AStat','-','2AOS','2AEVS'],
                 ['2AJavaLab','2AJavaLab','2AOS','-','2AEnglish','2AEVS']];
        
        $tar2A = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];


        //2A theory 4hours
        $q15 = "SELECT * FROM 2a_theory_4hours WHERE SPID='2AOS'";
        $result = $conn->query($q15);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AOS"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        $q16 = "SELECT * FROM 2a_theory_4hours WHERE SPID='2AJava'";
        $result = $conn->query($q16);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AJava"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        $q17 = "SELECT * FROM 2a_theory_4hours WHERE SPID='2ADBMS'";
        $result = $conn->query($q17);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2ADBMS"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        $q18 = "SELECT * FROM 2a_theory_4hours WHERE SPID='2AStat'";
        $result = $conn->query($q18);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AStat"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        //2A Lab 2hours
        $q19 = "SELECT * FROM 2a_lab_2hours WHERE SPID='2AJavaLab'";
        $result = $conn->query($q19);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AJavaLab"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        $q20 = "SELECT * FROM 2a_lab_2hours WHERE SPID='2ADBMSLab'";
        $result = $conn->query($q20);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2ADBMSLab"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        //2A language 4hours
        $q21 = "SELECT * FROM 2a_language_4hours WHERE SPID='2AFrench'";
        $result = $conn->query($q21);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AFrench"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        $q22 = "SELECT * FROM 2a_language_4hours WHERE SPID='2AEnglish'";
        $result = $conn->query($q22);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AEnglish"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }

        //2A EVS 2hours
        $q23 = "SELECT * FROM 2a_evs_2hours WHERE SPID='2AEVS'";
        $result = $conn->query($q23);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2A);$i++){
            for($j=0;$j<count($ar2A[$i]);$j++){
                if($ar2A[$i][$j]=="2AEVS"){ 
                    $ar2A[$i][$j] = $a;
                    $tar2A[$i][$j] = $b;
                }
            }
        }


        //2B
        $ar2B = [['2BJavaLab','2BJavaLab','2BStat','-','2BEnglish','2BDBMS'],
                 ['2BDBMSLab','2BDBMSLab','2BFrench','-','2BJava','2BDBMS'],
                 ['2BJava','2BFrench','2BStat','-','2BEnglish','2BOS'],
                 ['2BJava','2BStat','2BOS','-','2BFrench','2BOS'],
                 ['2BFrench','2BEnglish','2BOS','-','2BJava','2BDBMS'],
                 ['2BDBMS','2BEVS','2BStat','-','2BEnglish','2BEVS']];
        
        $tar2B = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];

        
        //2B theory 4hours
        $q24 = "SELECT * FROM 2b_theory_4hours WHERE SPID='2BOS'";
        $result = $conn->query($q24);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BOS"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        $q25 = "SELECT * FROM 2b_theory_4hours WHERE SPID='2BJava'";
        $result = $conn->query($q25);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BJava"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        $q26 = "SELECT * FROM 2b_theory_4hours WHERE SPID='2BDBMS'";
        $result = $conn->query($q26);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BDBMS"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        $q27 = "SELECT * FROM 2b_theory_4hours WHERE SPID='2BStat'";
        $result = $conn->query($q27);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BStat"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        //2B lab 2hours
        $q28 = "SELECT * FROM 2b_lab_2hours WHERE SPID='2BJavaLab'";
        $result = $conn->query($q28);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BJavaLab"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        $q29 = "SELECT * FROM 2b_lab_2hours WHERE SPID='2BDBMSLab'";
        $result = $conn->query($q29);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BDBMSLab"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        //2B language 4hours
        $q30 = "SELECT * FROM 2b_language_4hours WHERE SPID='2BFrench'";
        $result = $conn->query($q30);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BFrench"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        $q31 = "SELECT * FROM 2b_language_4hours WHERE SPID='2BEnglish'";
        $result = $conn->query($q31);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BEnglish"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        //2B EVS 2hours
        $q32 = "SELECT * FROM 2b_evs_2hours WHERE SPID='2BEVS'";
        $result = $conn->query($q32);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar2B);$i++){
            for($j=0;$j<count($ar2B[$i]);$j++){
                if($ar2B[$i][$j]=="2BEVS"){ 
                    $ar2B[$i][$j] = $a;
                    $tar2B[$i][$j] = $b;
                }
            }
        }

        

        //3A
        $ar3A = [['3ADSE','3AADJava','3APCD','-','3AWebLab','3AWebLab'],
                 ['3AADJava','3ATDC','3ATDC','-','3APCD','3AMAD'],
                 ['3ADSE','3AWeb','3AMAD','-','3AADJavaLab','3AADJavaLab'],
                 ['3AMADLab','3AMADLab','3AMADLab','-','3APCD','3AWeb'],
                 ['3ADSE','3AMAD','3AADJava','-','3AWeb','3AMAD'],
                 ['3AWeb','3APCD','3AWeb','-','3ADSE','3AADJava']];
        
        $tar3A = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];

        ///3A theory 4hours
        $q33 = "SELECT * FROM 3a_theory_4hours WHERE SPID='3AMAD'";
        $result = $conn->query($q33);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AMAD"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        $q34 = "SELECT * FROM 3a_theory_4hours WHERE SPID='3AADJava'";
        $result = $conn->query($q34);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AADJava"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        $q35 = "SELECT * FROM 3a_theory_4hours WHERE SPID='3APCD'";
        $result = $conn->query($q35);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3APCD"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        //3A theory 5hours
        $q36 = "SELECT * FROM 3a_theory_5hours WHERE SPID='3AWeb'";
        $result = $conn->query($q36);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AWeb"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        //3A lab 2hours
        $q37 = "SELECT * FROM 3a_lab_2hours WHERE SPID='3AADJavaLab'";
        $result = $conn->query($q37);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AADJavaLab"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        $q38 = "SELECT * FROM 3a_lab_2hours WHERE SPID='3AWebLab'";
        $result = $conn->query($q38);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AWebLab"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        //3A lab 3hours
        $q39 = "SELECT * FROM 3a_lab_3hours WHERE SPID='3AMADLab'";
        $result = $conn->query($q39);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3AMADLab"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        //3A DSE 4hours
        $q40 = "SELECT * FROM 3a_dse_4hours WHERE SPID='3ADSE'";
        $result = $conn->query($q40);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3ADSE"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }

        //3A TDC 2hours
        $q41 = "SELECT * FROM 3a_tdc_2hours WHERE SPID='3ATDC'";
        $result = $conn->query($q41);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3A);$i++){
            for($j=0;$j<count($ar3A[$i]);$j++){
                if($ar3A[$i][$j]=="3ATDC"){ 
                    $ar3A[$i][$j] = $a;
                    $tar3A[$i][$j] = $b;
                }
            }
        }


        //3B
        $ar3B = [['3BDSE','3BWeb','3BMAD','-','3BPCD','3BADJava'],
                 ['3BWeb','3BTDC','3BTDC','-','3BADJava','3BWeb'],
                 ['3BDSE','3BADJavaLab','3BADJavaLab','-','3BPCD','3BMAD'],
                 ['3BWeb','3BPCD','3BADJava','-','3BMAD','3BADJava'],
                 ['3BDSE','3BWebLab','3BWebLab','-','3BPCD','3BWeb'],
                 ['3BMADLab','3BMADLab','3BMADLab','-','3BDSE','3BMAD']];
        
        $tar3B = [[0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0],
                  [0,0,0,0,0,0]];


        //3B theory 4hours
        $q42 = "SELECT * FROM 3b_theory_4hours WHERE SPID='3BMAD'";
        $result = $conn->query($q42);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BMAD"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        $q43 = "SELECT * FROM 3b_theory_4hours WHERE SPID='3BADJava'";
        $result = $conn->query($q43);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BADJava"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        $q44 = "SELECT * FROM 3b_theory_4hours WHERE SPID='3BPCD'";
        $result = $conn->query($q44);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BPCD"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        //3B theory 5hours
        $q45 = "SELECT * FROM 3b_theory_5hours WHERE SPID='3BWeb'";
        $result = $conn->query($q45);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BWeb"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        //3B lab 2hours
        $q46 = "SELECT * FROM 3b_lab_2hours WHERE SPID='3BADJavaLab'";
        $result = $conn->query($q46);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BADJavaLab"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        $q47 = "SELECT * FROM 3b_lab_2hours WHERE SPID='3BWebLab'";
        $result = $conn->query($q47);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BWebLab"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        //3B lab 3hours
        $q48 = "SELECT * FROM 3b_lab_3hours WHERE SPID='3BMADLab'";
        $result = $conn->query($q48);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BMADLab"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        //3B DSE 4hours
        $q49 = "SELECT * FROM 3b_dse_4hours WHERE SPID='3BDSE'";
        $result = $conn->query($q49);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BDSE"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }

        //3B TDC 2hours
        $q50 = "SELECT * FROM 3b_tdc_2hours WHERE SPID='3BTDC'";
        $result = $conn->query($q50);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $a = $row["Subject"];
                $b = $row["Teacher_Name"];
            }
        }
        for($i=0;$i<count($ar3B);$i++){
            for($j=0;$j<count($ar3B[$i]);$j++){
                if($ar3B[$i][$j]=="3BTDC"){ 
                    $ar3B[$i][$j] = $a;
                    $tar3B[$i][$j] = $b;
                }
            }
        }


        //making the array1 as a reference for shuffling
        $indices = array_keys($ar1A);
        shuffle($indices);

        //Shuffling each array individually
        $shuffled_ar1A = array();
        $shuffled_tar1A = array();

        $shuffled_ar1B = array();
        $shuffled_tar1B = array();

        $shuffled_ar2A = array();
        $shuffled_tar2A = array();

        $shuffled_ar2B = array();
        $shuffled_tar2B = array();

        $shuffled_ar3A = array();
        $shuffled_tar3A = array();

        $shuffled_ar3B = array();
        $shuffled_tar3B = array();

        foreach ($indices as $index) {
            $shuffled_ar1A[] = $ar1A[$index];
            $shuffled_tar1A[] = $tar1A[$index];

            $shuffled_ar1B[] = $ar1B[$index];
            $shuffled_tar1B[] = $tar1B[$index];

            $shuffled_ar2A[] = $ar2A[$index];
            $shuffled_tar2A[] = $tar2A[$index];

            $shuffled_ar2B[] = $ar2B[$index];
            $shuffled_tar2B[] = $tar2B[$index];

            $shuffled_ar3A[] = $ar3A[$index];
            $shuffled_tar3A[] = $tar3A[$index];

            $shuffled_ar3B[] = $ar3B[$index];
            $shuffled_tar3B[] = $tar3B[$index];
        }
        $conn->close();

        session_start();

        $_SESSION['ar1A'] = $shuffled_ar1A;
        $_SESSION['ar1B'] = $shuffled_ar1B;
        $_SESSION['ar2A'] = $shuffled_ar2A;
        $_SESSION['ar2B'] = $shuffled_ar2B;
        $_SESSION['ar3A'] = $shuffled_ar3A;
        $_SESSION['ar3B'] = $shuffled_ar3B;

        $_SESSION['tar1A'] = $shuffled_tar1A;
        $_SESSION['tar1B'] = $shuffled_tar1B;
        $_SESSION['tar2A'] = $shuffled_tar2A;
        $_SESSION['tar2B'] = $shuffled_tar2B;
        $_SESSION['tar3A'] = $shuffled_tar3A;
        $_SESSION['tar3B'] = $shuffled_tar3B;
        header("Location: timetable.php");
    ?>
</body>
</html>