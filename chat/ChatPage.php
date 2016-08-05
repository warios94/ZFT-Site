
<?php
session_start();
?>

<!DOCTYPE html>


<html>
   <head><title>Chat</title>
       <script type="text/javascript" src="js/jquery.js">
       </script>
       <script type="text/javascript">
            $(document).ready(function(){
                $('#ChatText').keyup(function(e)){

                          if(e.keyCode==13){
                    var ChatText =  $('#ChatText').val();
                    $.ajax({
                        type:'POST',
                        url:'InsertMessage.php';
                        data:{ChatText:ChatText}
                           success:function(){
                         $('#ChatText').val("");
                    }
                    })
                }           }
            })

       </script>
   </head>
    <body>
        <?php

        echo  $_SESSION['usename'];

        ?>
        </br></br>
        <div id="Chat">
            <div id="ChatMessage">

            </div>
            <textarea id="ChatText" name="ChatText">

            </textarea>
        </div>
    </body>
</html>
