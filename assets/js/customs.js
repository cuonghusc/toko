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
    // console.log(id);
    window.open('details.php?product_id='+id,'_blank');
});
