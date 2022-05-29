    <?php

        include 'register.html';

        //server configuration

        include 'server_con.php';

        if (isset($_GET['error'])) { 

            echo ' <center>  <p class="error">';
            echo $_GET['error']."</p>";
 
         }

         
        

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

    <script>
    const image_input = document.querySelector("#image_input");
    var uploaded_image;

    image_input.addEventListener('change', function() {
    const reader = new FileReader();
    reader.addEventListener('load', () => {
        uploaded_image = reader.result;
        document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
    });
    reader.readAsDataURL(this.files[0]);
    });

    </script>