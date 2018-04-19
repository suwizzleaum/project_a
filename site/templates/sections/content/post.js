$(document).ready(function() {
    var content_val = document.getElementById("content_val").value;
    //console.log(content_val);
    $.ajax({
        url : "http://127.0.0.1:9080/adminsite/public/api/content/"+content_val,
        dataType : "json",
        type : 'GET',
        success : function (data) {
            console.log(data);
            var source   = document.getElementById("entry-template-post").innerHTML;
            var template = Handlebars.compile(source);
            var html = template({obj:data});
            //console.log(html);
            $('#entry-post').html(html);
        },
        error : function (data, errorThrown) {
            console.log(data);
        }
    });
});