$(function(){
	$("#provinsi").change(function(){
		$.get(baseURL+"customer/getkota/"+$(this).val(), function(data){
			$("#kota").html(data);
		});
	});
	$(".validate").validate();
});