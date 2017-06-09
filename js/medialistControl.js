$(document).ready(function () {
    alert("ready");
    $(".btn-lg").on("click",function(){
        alert("click");
    })




    $.ajax({
        url: 'playlist.xml',
        type: 'GET',
        dataType: 'xml',
        success: function (xml) {
            var mediaListNumber = $(xml).find("track").length;
            for (var i = 0; i < mediaListNumber; i++) {
                var location = $(xml).find('location').eq(i).text();
            }

        }
    })
});