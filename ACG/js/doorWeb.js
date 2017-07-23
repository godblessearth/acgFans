$(document).ready(function(){
//浮动信息窗口
	//动画区
	$(".leftAni").mouseleave(function(){
		$(".titleLeftAni").animate({top:'350px'});
  });
	$(".leftAni").mouseenter(function(){
		$(".titleLeftAni").animate({top:'310px'});
  }); 
	$(".leftAni").mouseenter(function(){
		$(".titleLeftAni").css({"display":"block","background":"#444","color":"#fff"});
  }); 
	//漫画区
	$(".leftCom").mouseleave(function(){
		$(".titleLeftCom").animate({top:'350px'});
  });
	$(".leftCom").mouseenter(function(){
		$(".titleLeftCom").animate({top:'310px'});
  }); 
	$(".leftCom").mouseenter(function(){
		$(".titleLeftCom").css({"display":"block","background":"#444","color":"#fff"});
  }); 
 //图片切换
	var img=new Array("../../pictures/1.1.jpg","../../pictures/1.2.jpg","../../pictures/1.3.jpg","../../pictures/1.4.jpg","../../pictures/1.5.jpg","../../pictures/1.6.jpg","../../pictures/1.7.jpg","../../pictures/1.8.jpg");//创建图片地址数组
   $(".headImgText li").mouseenter(function(){ 
	$(this).addClass("headImgListTextBac").siblings().removeClass("headImgListTextBac"); //选中的li样式变化,并移除其他同级元素样式
	var num=$(this).index(); //获得当前li元素位置并赋给nun
	var x=img[num];//将数组中第nun个值赋给x
   $(".headImages img").attr("src",x);   // 将图片地址修改为x
   });
//图片自动切换   
	var speed=7000;
	var automatic=setInterval(function(){  
	var i=$(".headImgListTextBac").index();   //获得当前已改变样式的li元素的位置，并赋给i，作为初始值，很重要！
	i++;  
	i=i%img.length;
	var x=img[i];   
	$(".headImages img").attr("src",x);	 
	$(".headImgText li").eq(i).addClass("headImgListTextBac").siblings().removeClass("headImgListTextBac");    
	 },speed); 
//按钮点击切换图片
//上一张
	$("#btnImgLeft").click(function(){
	var i=$(".headImgListTextBac").index();//获得当前已改变样式的li元素的位置，并赋给i，作为初始值
	i--;  
	i=(i+img.length)%img.length;
	var x=img[i];   
	$(".headImages img").attr("src",x);	 
	$(".headImgText li").eq(i).addClass("headImgListTextBac").siblings().removeClass("headImgListTextBac");     
	});
//下一张
	$("#btnImgRight").click(function(){
	var i=$(".headImgListTextBac").index();//获得当前已改变样式的li元素的位置，并赋给i，作为初始值
	i++;  
	i=i%img.length;
	var x=img[i];   
	$(".headImages img").attr("src",x);	 
	$(".headImgText li").eq(i).addClass("headImgListTextBac").siblings().removeClass("headImgListTextBac");     
	});
});
//实现点击分类标题，显示相应内容
//逻辑思路如下：布局上，外层div，再包一层DIV，添加Ul，li来实现分类大标题；然后在每个Li内，重新嵌套DIV，内部继续分为两块，左右结构；内容展示还是以li实现
//其内嵌的DIV，display统一为None，单独设置一个额外样式，内容为取消隐藏display:block;
//嵌套的DIV，使用绝对定位，内部的分区使用左浮动；
//需要实现的动态效果：1、点击切换下方内容；2、鼠标放入内容区域，从单元下方上拉一个包含内容标题的动画区域；
//第一项大标题（动画区），加载完即展示，其他标题，点击后，下方切换至相应内容；JS逻辑，点击第一项之后标题，给其添加一个额外样式，取消隐藏，而其他同级元素移除额外样式；
//li设置一个全局样式，来隐藏；
















