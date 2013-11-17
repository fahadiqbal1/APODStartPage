$(function() {
    console.log( "ready!" );
    getData();
});

function getData() {
    $.ajax({
        type: "GET",
        url: "https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.acme.com/jef/apod/rss.xml&num=1",
        dataType: "jsonp",
        success: function (data) {
            alert(data.responseData.feed.title);
        }
    });
}