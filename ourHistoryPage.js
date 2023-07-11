function getContent() {
    var options;

    options = {
        "action": "ccQuotes"
    };

    $.get("ccQuotes.php", options, function(data) {
        $('#contentBox').html(data);
    }); 
}