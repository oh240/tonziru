$(function() {
  $.getJSON("http://localhost:8888/tonziru/snippets/all.json" , function(data) {
    //var obj = $(".list-group-item");
    var dataLen = data['snippets'].length;
    for (i=0;i<dataLen;i++) {
        var id = data['snippets'][i]['Snippet']['id'];
        var category = data['snippets'][i]['Category']['name'];
        var title = data['snippets'][i]['Snippet']['title'];
        var e = $(
          '<a href="#" class="list-group-item" id="snippet_'+id+'"data-id="'+id+'">'+
            '<span class="badge">'+category+"</span>"+
            '<h5 class="list-group-item-heading">'+title+'</h5>'+
          '</a>'
        );
      $('.list-group').append(e);
    }

  });
});