$(function() {
    console.log( "ready!" );
    getData(); getConfig(); getLinks();
    loadWidgets();

    $("[data-toggle='tooltip']").tooltip();
    $('#simple-menu').sidr({
        displace: true
    });
    $('#close-menu').sidr({
        displace: true
    });

    var start = new Date;
    setInterval(function() {
        $('.Timer').text((new Date - start) / 1000 + " Seconds");
    }, 1000);
});

$(window).touchwipe({
    wipeLeft: function() {
        $.sidr('close', 'sidr');
    },
    wipeRight: function() {
        $.sidr('open', 'sidr');
    },
    preventDefaultEvents: false
});


function getData() {
    $.ajax({
        type: "GET",
        url: "https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.acme.com/jef/apod/rss.xml&num=1",
        dataType: "jsonp",
        success: function (data) {
            $('#headertext').html(data.responseData.feed.entries[0].title + '<i class="fa fa-angle-double-right"></i>').attr('href',data.responseData.feed.entries[0].link);
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

var startWidget = '';
function getConfig() {
    $.getJSON( "_config.json", function( data ) {
        $('.appName').html(data.name);
        startWidget = data.startWidget;
        showWidget(startWidget);
    });
}

function getLinks() {
    $.getJSON( "links.json", function( data ) {
        $.each(data, function() {
            //console.log('Name: ' + this.name);
            $('#sideBarLinks').append('<li><a href="'+this.link+'"> <i class="'+this.icon+' fa-border"></i> '+this.name+'</a></li>')
        });
    });
}

function loadWidgets() {
    clockWidget();
}

function showWidget(widget){
    if(widget != null){
        $('.widget').hide();
        $('#'+widget+'Widget').show();
        if(widget == "search"){
            $('#searchQuery').focus();
        }
    } else {
        $('#widgetWindow').toggle();
    }
}

function clockWidget() {
    var today=new Date();
    var h=today.getHours();
    if(h > 12){
        h -=12;
    } else if (h === 0){
        h = 12
    }
    var m=today.getMinutes();
    var s=today.getSeconds();
// add a zero in front of numbers<10
    m=checkTime(m);
    s=checkTime(s);
    $('#clock').text(h+":"+m+":"+s);
    //console.log(h+":"+m+":"+s);
    setTimeout(function () {
        clockWidget()
    }, 1000);
    function checkTime(i) {
        if (i<10)
        {
            i="0" + i;
        }
        return i;
    }
}

function searchGoogle() {
    var query = $('#searchQuery').val();
    document.location.href="https://www.google.com/search?q="+query;
}