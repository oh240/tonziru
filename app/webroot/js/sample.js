$(function() {
  var GL = {};
  var page = 1;
	var max = 0;
  $.getJSON("http://localhost:8888/tonziru/json/all/page:1" , function(data) {
   
    ViewRender(data);

		var maxPage = max / 10 ;
		var pageLimit = Math.ceil(maxPage);

		if(page < maxPage) {
				 
	  	var Ne = '<button class="btn btn-default Next">'+
	                 'Next'+
	               '</button>';

	   	$('.nexDiv').append(Ne);
				 
		}
		
  });

  function ViewRender(data){

    $('.snippetTitle').text('');
    $('.goods').text('');
    $('.bats').text('');
    　
    var dataLen = data['snippets'].length;
		
    GL.jsdata = data['snippets'];
    GL.title = data['snippets'][0]['Snippet']['title'];
    GL.body = data['snippets'][0]['Snippet']['body'];
    GL.bats = data['snippets'][0]['Snippet']['bats'];
    GL.goods = data['snippets'][0]['Snippet']['goods'];
    GL.id = data['snippets'][0]['Snippet']['id'];
    GL.category = data['snippets'][0]['Category']['name'];
		max = data['snippet_cnt'];
    
    if (GL.category == 'others') {
      $('pre').addClass("brush: css");
    } else {
      $('pre').addClass("brush: "+GL.category);
    }

    $("#linker").attr("href", "http://localhost:8888/tonziru/snippets/edit/"+GL.id);

    $('.snippetTitle').append(GL.title);
    $('pre').text(GL.body);
		/*
    $('.bats').append("Bat ... "+GL.bats+' <span class="glyphicon glyphicon-thumbs-down"></span>');

    $('.goods').append("Good ! "+GL.goods+' <span class="glyphicon glyphicon-thumbs-up"></span>');
		*/
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


 
 $(document).on('click','.list-group-item',function(e){
    e.preventDefault();
  });

  $(document).on('click','.list-group-item',function(){

    GL.ren = $(this).data('ren');
    GL.id = GL.jsdata[GL.ren]['Snippet']['id'];
    GL.title = GL.jsdata[GL.ren]['Snippet']['title'];
    GL.body = GL.jsdata[GL.ren]['Snippet']['body'];
    GL.goods = GL.jsdata[GL.ren]['Snippet']['goods'];
    GL.bats = GL.jsdata[GL.ren]['Snippet']['bats'];
    GL.category = GL.jsdata[GL.ren]['Category']['name'];
    $("#linker").attr("href", "http://localhost:8888/tonziru/snippets/edit/"+GL.id);
    $(".list-group-item").removeClass('active');
    
    $(this).addClass('active');

    $('.syntaxhighlighter').parent().remove();

    $('.codeArea').append('<pre></pre>');

    if (GL.category == 'others') {
      $('pre').addClass("brush: css");
    } else {
      $('pre').addClass("brush: "+GL.category);
    }
    
    $('pre').html(GL.body);

    $('pre').each(function() {
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
		
		var maxPage = max / 10 ;
		
		var pageLimit = Math.ceil(maxPage);
		
    if (page < pageLimit) {
			page++;
			
       URL = "http://localhost:8888/tonziru/json/all/page:"+page;

       $('.preDiv').text('');
       $('.nexDiv').text('');

			 
       var Pe = '<button class="btn btn-default Prev">'+
                 'Prev'+
               '</button>';
							 
			 if(page < maxPage) {
				 
	       var Ne = '<button class="btn btn-default Next">'+
	                 'Next'+
	               '</button>';

	       $('.nexDiv').append(Ne);
				 
			 }

       $('.preDiv').append(Pe);
			 
    }

    $.getJSON(URL, function(data) {
      $('.list-group').text('');
      ViewRender(data);
    });

  });


  $(document).on('click','.Prev',function(){

    if (page > 1) {
			
			page--;
			
       URL = "http://localhost:8888/tonziru/json/all/page:"+page;

       $('.preDiv').text('');
       $('.nexDiv').text('');

			 var Ne = '<button class="btn btn-default Next">'+
			           'Next'+
			          '</button>';
								
			$('.nexDiv').append(Ne);
							 
			 if(page > 1) {
				 
	       var Pe = '<button class="btn btn-default Prev">'+
	                 'Prev'+
	               '</button>';

				 $('.preDiv').append(Pe);
				 
			 }

    }
		
    $.getJSON(URL, function(data) {
      $('.list-group').text('');
      ViewRender(data);
    });

  });

});











