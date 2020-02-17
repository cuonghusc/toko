$("#slide_brand").owlCarousel({
    items: 5,
    loop:true,
    nav:true
});
$("#slide_arrivals").owlCarousel({
    items: 4,
    loop:true,
    nav:true
});
$('.product_detail').on('click',function(){
    var id = $(this).attr('id');
    window.open('details.php?product_id='+id,'_blank');
});
$(".products_size_value").on("click",function(){
	var size = $(this).attr("data-size");
	//console.log(size);
	$("li").removeClass("selected_size");
	$(this).addClass("selected_size");
});
var quantity = $(".input_quantity").val();
var price = $(".hidden_price").val();
$(".btn_sub").on("click",function() {
	if (quantity>1) {
		quantity--;
	}
	$(".input_quantity").val(quantity);
	$(".total_payment").text("$"+formatNumber(price*quantity));
});
$(".btn_plus").on("click",function() {
	quantity++;
	$(".input_quantity").val(quantity);
	$(".total_payment").text("$"+formatNumber(price*quantity));
});
$(".input_quantity").change(function(){
	var quantity = $(".input_quantity").val();
	$(".total_payment").text("$"+formatNumber(price*quantity));
});
function formatNumber(num) {
	return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}
