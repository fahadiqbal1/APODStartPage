$(function() {
    console.log( "ready!" );
    getData(); getConfig();

    $("[data-toggle='tooltip']").tooltip();
    $('#simple-menu').sidr({
        displace: true
    });
    $('#close-menu').sidr({
        displace: true
    });
});


function getData() {
    $.ajax({
        type: "GET",
        url: "https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.acme.com/jef/apod/rss.xml&num=1",
        dataType: "jsonp",
        success: function (data) {
            $('#headertext').html(data.responseData.feed.entries[0].title);
            getPic(data.responseData.feed.entries[0].content);
        }
    });
}

function getPic(data) {
    var regex   = /img src=\"([a-zA-Z0-9\_\.\/\:]*)\"/;
    var match = data.match(regex);
    var src = match ? match[1] : '';
    $('.fullscreen_bg').css('background-image', 'url(' + src + ')').css('background-image','no-repeat').css('background-image','center').css('background-image','center').css('background-image','fixed');
}

function getConfig() {
    $.getJSON( "_config.json", function( data ) {
        $('.appName').html(data.name);
    });
}