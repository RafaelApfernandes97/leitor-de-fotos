<?php
           session_start();

           if (isset($_POST['input1'])) {
             $_SESSION['input1'] = $_POST['input1'];
           }
           
           if (isset($_POST['input2'])) {
             $_SESSION['input2'] = $_POST['input2'];
           }
           
           if (isset($_POST['input3'])) {
             $_SESSION['input3'] = $_POST['input3'];
           }
           
?>