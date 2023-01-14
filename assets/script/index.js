function message(text) {
    $('#chat-result').prepend(text);
}

$(document).ready(function ($) {

    let socket = new WebSocket("ws://localhost:8090/chatPHP/server.php")

    socket.onopen = function () {
        message("<div style='margin-top: 10px'>Соединение установлено</div>");
    };
    socket.onerror = function (error) {
        message("<div style='margin-top: 10px'>Ошибка при соединении" + (error.message ? error.message : "") + "</div>");
    }
    socket.onclose = function () {
        message("<div style='margin-top: 10px'>Соединение закрыто</div>");
    }
    socket.onmessage = function (event) {
        let data = JSON.parse(event.data);
        message("<div class='message'> " + data.message + "</div>");
    }


    $("#chat").on('submit', function () {
        let message = {
            chat_message: $("#chat-message").val() ,
            chat_user: $("#chat-user").val(),
        };
        $("#chat-user").attr("type", "hidden");
        $("#label").attr("display", "none");
        $(".123").empty();

        socket.send(JSON.stringify(message));
        $("#chat-message").val("");
        return false;
    });
});