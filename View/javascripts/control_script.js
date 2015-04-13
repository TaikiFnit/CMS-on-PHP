$(function(){
    $("#accordion").accordion();
    $('.dropdown-toggle').dropdown();
    $("[data-toggle=tooltip-top]").tooltip({
        placement: 'top'
    });
    $("[data-toggle=tooltip-bottom]").tooltip({
        placement: 'bottom'
    });
});

$("#addForm button").click(function(){
	// form2がすでに追加されているかどうか
	if(!$(".image2").get(0)){
		// 追加されていない∴2番目の要素を追加する 

		var code = "<div class='image2'><label for='imageInput2'>Image 2:</label><input type='file' name='file2' id='imageInput2'></div>";

		$(".image1").after(code);
		
	}
	else{
		// 3番目の要素を追加
		var code = "<div class='image3'><label for='imageInput3'>Image 3:</label><input type='file' name='file3' id='imageInput3'></div>";

		$(".image2").after(code);

		// addを削除
		$("#addForm").empty().append("limit: 3").attr("class", "text-danger");
		
	}
});