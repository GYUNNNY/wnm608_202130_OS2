$(()=>{

	$(".images-thumbs img").on("mouseenter",function(e){
		let src = $(this).attr("src");
		$(".images-main img").attr("src",src);
	})

});

const checkSort = (el) => {

	let form = el.closest("form");
	let selected = el.querySelector(":checked");
 
	let o = selected.dataset.orderby;
	let d = selected.dataset.direction;
 
	form.o.value = o;
	form.d.value = d;
 
	form.submit();
 }