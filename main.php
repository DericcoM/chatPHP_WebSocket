<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/normalize.css?ver=<?php echo time()?>">
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time()?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>ChatPHP</title>
</head>
<body>


<form id="chat">
    <div class="chat-result" id="chat-result">
        <input type="text" name="chat-user" id="chat-user" class="question" required autocomplete="off" />
        <label id="label" for="nme"><span class="123">What's your name?</span></label>
        <input name="chat-message" id="chat-message" rows="2" class="question"  required autocomplete="off"></input>
        <label for="msg"><span>What's your message?</span></label>
        <input class="button" type="submit" value="Send">
    </div>
</form>

<!--<form id="chat" action="">
    <div class="chat-result" id="chat-result">
        <input type="text" name="chat-user" id="chat-user" placeholder="Name">
        <input type="text" name="chat-message" id="chat-message" placeholder="Message">
        <input type="submit" value="Send">
    </div>
</form>
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/script/index.js?ver=<?php echo time()?>"></script>
</body>
</html>