$(function() {
  return $('#ta').typeahead({
    name: 'names',
    local: ["斉藤", "斉木", "大野", "大原"],
    limit: 10
  });
});

/*
$('.list-group-item').click(function(){
	console.log("console");
	$.getJSON("sample.json", function(data){
		for(var i in data){
      $(".codeview").append(data[i].division);
    }
	});	
});

*/