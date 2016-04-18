$(function() {
	$(".product-link").click(function(){
		var id = $(this).attr("data-id");

		if ($("#cart").html() == "Корзина пуста") {
			$("#cart").html(render(products[id]))
		} else {
			$("#cart").append(render(products[id]))
		}
	})

	$("body").on("click", ".product-rm", function() {
	  	$(this).parent().remove()
	  	if ($(".product-rm").length == 0) {
	  		$("#cart").html("Корзина пуста")
	  	}
	});
})

function render(product) {
	var template = "<div>" + product.title + ", Цена " + product.price + " <a class='product-rm' href='javascript:{}'>удалить</a> </div>"
	return template
}