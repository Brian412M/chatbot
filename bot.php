<!-- Created By CodingNepal -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type='text/css' href="bot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!--bot icon free use-->
    <a href="https://icons8.com/icon/HiC7xMlM0VYI/chatbot"></a>


    <div class="wrapper">
        <div class="title">Rafiki bot <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA80lEQVR4nO2XSwrCQAyGv5WX0K49hSvdiPfyMFJwI/UGineoG+tWQS8QGZhCHanzcDo+8Id/UdLkoyGBBsI0A45ABUxJqAoQ7UNK8L4BLlOCJw3wmMQSbX4GnAE5cG1AXK1ylsAwBHoKAJo+61rOyiNAay/csWHtbfPFBxwL6j2AYngF9IEBUATEW7UDNo1nM1EVrJUFxNs4Dy90BRazAzZwoYurouuAeDA41nDJHyzvavXWsk71ntpk22Ox7fWzdbEpiwn21feDpavh+hhwV5IY4PqaKB1/cUcaqnKiXRM+nqcGqy9V0N6rYHWsKbhrq+90A5uXikkGnEa0AAAAAElFTkSuQmCC"></div>
        
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Karibu rafiki nikusaidieje?</p>
                </div>
            </div>
        </div>

        

    </div>

    <footer>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        
</footer>
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
    
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    html,body{
        display: grid;
        height: 100%;
        place-items: center;
    }
    ::selection{
        color: #fff;
        background: #007bff;
    }
    ::-webkit-scrollbar{
        width: 3px;
        border-radius: 25px;
    }
    ::-webkit-scrollbar-track{
        background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb{
        background: #ddd;
    }
    ::-webkit-scrollbar-thumb:hover{
        background: #ccc;
    }
    .wrapper{
        width: 370px;
        background: #fff;
        border-radius: 5px;
        border: 1px solid lightgrey;
        border-top: 0px;
    }
    .wrapper .title{
        background: #007bff;
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        line-height: 60px;
        text-align: center;
        border-bottom: 1px solid #006fe6;
        border-radius: 5px 5px 0 0;
    }
    .wrapper .form{
        padding: 20px 15px;
        min-height: 400px;
        max-height: 400px;
        overflow-y: auto;
    }
    .wrapper .form .inbox{
        width: 100%;
        display: flex;
        align-items: baseline;
    }
    .wrapper .form .user-inbox{
        justify-content: flex-end;
        margin: 13px 0;
    }
    .wrapper .form .inbox .icon{
        height: 40px;
        width: 40px;
        color: #fff;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        font-size: 18px;
        background: #007bff;
    }
    .wrapper .form .inbox .msg-header{
        max-width: 53%;
        margin-left: 10px;
    }
    .form .inbox .msg-header p{
        color: #fff;
        background: #007bff;
        border-radius: 10px;
        padding: 8px 10px;
        font-size: 14px;
        word-break: break-all;
    }
    .form .user-inbox .msg-header p{
        color: #333;
        background: #efefef;
    }
    .wrapper .typing-field{
        display: flex;
        height: 60px;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        background: #efefef;
        border-top: 1px solid #d9d9d9;
        border-radius: 0 0 5px 5px;
    }
    .wrapper .typing-field .input-data{
        height: 40px;
        width: 335px;
        position: relative;
    }
    .wrapper .typing-field .input-data input{
        height: 100%;
        width: 100%;
        outline: none;
        border: 1px solid transparent;
        padding: 0 80px 0 15px;
        border-radius: 3px;
        font-size: 15px;
        background: #fff;
        transition: all 0.3s ease;
    }
    .typing-field .input-data input:focus{
        border-color: rgba(0,123,255,0.8);
    }
    .input-data input::placeholder{
        color: #999999;
        transition: all 0.3s ease;
    }
    .input-data input:focus::placeholder{
        color: #bfbfbf;
    }
    .wrapper .typing-field .input-data button{
        position: absolute;
        right: 5px;
        top: 50%;
        height: 30px;
        width: 65px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        outline: none;
        opacity: 0;
        pointer-events: none;
        border-radius: 3px;
        background: #007bff;
        border: 1px solid #007bff;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }
    .wrapper .typing-field .input-data input:valid ~ button{
        opacity: 1;
        pointer-events: auto;
    }
    .typing-field .input-data button:hover{
        background: #006fef;
    }
    body{background: red;}

   /* @media only screen and (max-width:600px) {
        body{
            overflow:hidden;
            display:flex;
            justify-content:center;
        }

    .wrapper{
        width:70%;
        position:absolute;
        height:inherit;
        background:#fff;
        overflow-y:hidden;

    }

    footer{
        position: relative;
        top:20%;
        display:flex;
        flex-flow:row wrap;
        justify-content:center;
    }
    .typing-field input{
        position:relative;
        width:inherit;
    }

    .typing-field input:focus{
        outline:none;
    }
    #data{
        max-width:inherit;
        position:relative;
        bottom:0px;
    }

    .form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}

#send-btn{
    padding:20px 10px;
    border-style:none;
}

#send-btn:hover{
    cursor:pointer;
    background-color:none;
    border:1px solid #fff;
}

.wrapper .title{
    background: #ffffff;
    color:coral;
}
    .wrapper{
        width:100%;
        overflow-x:hidden;
    }

    body{
        overflow:hidden;
    }*/

   
</style>
</body>
</html>