//左侧列表选项卡
$(document).ready(function(){
	var oLi=$(".person-leftlists ul li ");
	oLi.click(function(){
		var i=$(this).index();
		$(".person-leftlists li ").eq(i).addClass("act").siblings().removeClass("act");
		$(".content-match>div").eq(i).removeClass("hidden")
		.addClass("show").siblings().removeClass("show").addClass("hidden");
	})
});
//个人信息的加载
$(function(){
	$(".person-leftlists li").eq(4).click(function(){
		$.ajax({
			url:"1.php",
			success:function(response){$(".content-match>div").eq(4).html(response)}
		});
	});

})