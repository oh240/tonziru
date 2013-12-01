$(function() {
  var GL = {};
  var URL = "http://localhost:8888/tonziru/json/all";

  $.getJSON("http://localhost:8888/tonziru/json/all" , function(data) {
    ViewRender(data);
  });

  function ViewRender(data){
    var dataLen = data['snippets'].length;
    GL.jsdata = data['snippets'];
    GL.title = data['snippets'][0]['Snippet']['title'];
    GL.body = data['snippets'][0]['Snippet']['body'];
    GL.bats = data['snippets'][0]['Snippet']['bats'];
    GL.goods = data['snippets'][0]['Snippet']['goods'];
    GL.category = data['snippets'][0]['Category']['name'];
    
    if (GL.category == 'others') {
      $('pre').addClass("brush: css");
    } else {
      $('pre').addClass("brush: "+GL.category);
    }

    $('.snippetTitle').append(GL.title);
    $('pre').append(GL.body);

    $('.bats').append("Bat ... "+GL.bats+' <span class="glyphicon glyphicon-thumbs-down"></span>');

    $('.goods').append("Good ! "+GL.goods+' <span class="glyphicon glyphicon-thumbs-up"></span>');

    for (i=0;i<dataLen;i++) {
        GL.id = data['snippets'][i]['Snippet']['id'];
        GL.category = data['snippets'][i]['Category']['name'];
        GL.title = data['snippets'][i]['Snippet']['title'];
        if (i === 0) {
          var e = $(
            '<a href="#" class="list-group-item active" id="snippet_'+GL.id+'"data-id="'+GL.id+'"data-ren="'+i+'">'+
              '<span class="badge">'+GL.category+"</span>"+
              '<h5 class="list-group-item-heading">'+GL.title+'</h5>'+
            '</a>'
          );
        } else {
           var e = $(
            '<a href="#" class="list-group-item" id="snippet_'+GL.id+'"data-id="'+GL.id+'"data-ren="'+i+'">'+
              '<span class="badge">'+GL.category+"</span>"+
              '<h5 class="list-group-item-heading">'+GL.title+'</h5>'+
            '</a>'
          );
        }
      $('.list-group').append(e);
    }

    $("pre").each(function() {
      SyntaxHighlighter.highlight(SyntaxHighlighter.defaults, this);
    });
  }


 
 $(document).on('click','a',function(e){
    e.preventDefault();
  });

  $(document).on('click','.list-group-item',function(){

    GL.id = $(this).data('ren');
    GL.title = GL.jsdata[GL.id]['Snippet']['title'];
    GL.body = GL.jsdata[GL.id]['Snippet']['body'];
    GL.goods = GL.jsdata[GL.id]['Snippet']['goods'];
    GL.bats = GL.jsdata[GL.id]['Snippet']['bats'];

    GL.category = GL.jsdata[GL.id]['Category']['name'];

    $(".list-group-item").removeClass('active');
    
    $(this).addClass('active');

    $('.syntaxhighlighter').parent().remove();

    $('.codeArea').append('<pre></pre>');

    if (GL.category == 'others') {
      $('pre').addClass("brush: css");
    } else {
      $('pre').addClass("brush: "+GL.category);
    }

    $('pre').append(GL.body);

    $("pre").each(function() {
      SyntaxHighlighter.highlight(SyntaxHighlighter.defaults, this);
    });

    $('pre').remove();
    $('.snippetTitle').text('');
    $('.snippetTitle').append(GL.title);
    $('.bats').text('');  
    $('.bats').append("Bat ... "+GL.bats+' <span class="glyphicon glyphicon-thumbs-down"></span>');
    $('.goods').text('');  
    $('.goods').append("Good ! "+GL.goods+' <span class="glyphicon glyphicon-thumbs-up"></span>');
  });

  $(document).on('click','.Next',function(){
    var URL = "http://localhost:8888/tonziru/json/all/page:2";
    $.getJSON(URL, function(data) {
      $('.list-group').text('');
      ViewRender(data);
    });

  });

});











