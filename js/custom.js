$(function() {
    console.log( "ready!" );
    getData();
});

function getData() {
    $.ajax({
        type: "GET",
        url: "https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.acme.com/jef/apod/rss.xml&num=2",
        dataType: "jsonp",
        success: function (data) {
            $('#header').html(data.responseData.feed.entries[1].title);
            getPic(data.responseData.feed.entries[1].content);
        }
    });
}

function getPic(data) {
    alert(data);
    var regex   = /img src=\"([a-zA-Z0-9\_\.\/\:]*)\"/;
    var match = data.match(regex);
    var src = match[1];
    $('#img').html('<img src="'+src+'"/>');

}