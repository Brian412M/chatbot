<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" type="text/css" href="style.css">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!--bot icon free use-->
    <a href="https://icons8.com/icon/HiC7xMlM0VYI/chatbot"></a>

    <header>
    <div class="title">
        <p>Rafiki bot <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA80lEQVR4nO2XSwrCQAyGv5WX0K49hSvdiPfyMFJwI/UGineoG+tWQS8QGZhCHanzcDo+8Id/UdLkoyGBBsI0A45ABUxJqAoQ7UNK8L4BLlOCJw3wmMQSbX4GnAE5cG1AXK1ylsAwBHoKAJo+61rOyiNAay/csWHtbfPFBxwL6j2AYngF9IEBUATEW7UDNo1nM1EVrJUFxNs4Dy90BRazAzZwoYurouuAeDA41nDJHyzvavXWsk71ntpk22Ox7fWzdbEpiwn21feDpavh+hhwV5IY4PqaKB1/cUcaqnKiXRM+nqcGqy9V0N6rYHWsKbhrq+90A5uXikkGnEa0AAAAAElFTkSuQmCC"></div></p>
    </header>


    <div class="wrapper">
        
        
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Karibu rafiki nikusaidieje?</p>
                </div>
            </div>
            <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
        

    </div>

    
        
        

</div>

    <script>
        
        function date(){
                date = new Date();
                
                alert('Leo ni '+date);
                
            }
        
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

    </body>
    </html>