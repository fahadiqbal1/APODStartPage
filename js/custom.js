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
            alert(data.responseData.feed.entries[0].title);
            getPic(data.responseData.feed.entries[0].content);
        }
    });
}

function getPic(data) {
    var regex   = /img src=\"([a-zA-Z0-9\_\.\/\:]*)\"/;
    var src = data.match(regex);
    var regex2 = /([a-zA-Z0-9\_\.\/\:]*)\"/;
    var match2 = src.match(regex2);
    alert(match2);

}