
   <?php
        error_reporting(0);
        ini_set('display_errors', 0);

        
        
        include 'index1.html';
        //server connection
        include 'server_con.php';
        include 'footer.html';

            
    ?>

    
    <script>
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
    </script>