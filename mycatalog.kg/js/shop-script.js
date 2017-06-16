$(function() {
	$("#newsticker").jCarouselLite({
		vertical: true,
		hoverPause:true,
		btnPrev: "#news-prev",
        btnNext: "#news-next",
        visible: 3,
		auto:2000,
		speed:1000
	});

$("#style-grid").click(function(){
    $("#block-tovar-grid").show();        
    $("#block-tovar-list").hide();
    
     $("#style-grid").attr("src","/images/gridActive.png");
      $("#style-list").attr("src","/images/list.png");
      
$.cookie('select_style','grid');

});


$("#style-list").click(function(){
    $("#block-tovar-grid").hide();
    $("#block-tovar-list").show();
    
     $("#style-list").attr("src","/images/listActive.png");
     $("#style-grid").attr("src","/images/grid.png");
     
     $.cookie('select_style','list');

}); 

if ($.cookie('select_style') == 'grid')
{
        $("#block-tovar-grid").show();        
            $("#block-tovar-list").hide();
    
      $("#style-grid").attr("src","/images/gridActive.png");
        $("#style-list").attr("src","/images/list.png");
}
else {
    $("#block-tovar-grid").hide();
    $("#block-tovar-list").show();
    
     $("#style-list").attr("src","/images/listActive.png");
     $("#style-grid").attr("src","/images/grid.png");
}


$("#select-sort").click(function(){
    
    $("#sorting-list").slideToggle(200);
    
});


$('#block-category2 > ul > li > a').click(function(){
    
        if($(this).attr('class') != 'active'){
            
                $('#block-category2 > ul > li > ul').slideUp(400);
                $(this).next().slideToggle(400);
                
                $('#block-category2 > ul > li > a').removeClass('active');
                $(this).addClass('active');
                $.cookie('select_cat', $(this).attr('id'));
                
        }else
        {
            $('#block-category2 > ul > li > a').removeClass('active');
            $('#block-category2 > ul > li > ul').slideUp(400);
             $.cookie('select_cat', '');
        }
    
});

            if($.cookie('select_cat') != '')
            {
                $('#block-category2 > ul > li > #'+$.cookie('select_cat')).addClass('active').next().show();
                                                
            }

});