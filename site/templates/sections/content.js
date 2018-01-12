$(document).ready(function() {
    $.ajax({
        url : "http://127.0.0.1:9080/adminsite/public/api",
        dataType : "json",
        type : 'GET',
        success : function (data) {
            console.log(data);
            var source   = document.getElementById("entry-template").innerHTML;
            var template = Handlebars.compile(source);
            var html = template({obj:data});
            //console.log(html);
            $('#entry').html(html);
        },
        error : function (data, errorThrown) {
            
        }
    });
});