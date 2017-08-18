$(document).ready(function ()){

	//Váriaveis locais

	var _containerBtn = $(".jbtnVoltar");
	var _btnLink = $(".jbtnVoltar-link");

	//Botão Voltar ao topo
	$(window).scroll(function() {
		if( $(this).scrollTop()> 70 ){
			_containerBtn.fadeIn(1000);
	}else{
			_containerBtn.fadeOut(0);
	}

	});

	//Click e Volte ao topo
	_btnLink.click(function(){

		$("html, body").animate({scrollTop:0}, 800);

		return false;
	});

});

$('#Carousel').on('slide.bs.carousel', function (ev) {
  var id = ev.relatedTarget.id;
  switch (id) {
    case "1":
      // do something the id is 1
      break;
    case "2":
      // do something the id is 2
      break;
    case "3":
      // do something the id is 3
      break;
    default:
      //the id is none of the above
  }
})