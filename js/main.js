$(document).ready(function() {
  $("#ModalSuscripcion").modal("show");
  $("#ModalPromociones").modal("show");

  $(document).on("scroll", function(e) {
    header = $(".header-middle");
    var sticky = header.offset();

    if ($(window).scrollTop() > $(".header-top").height()) {
      header.addClass("fixed-top");
    } else {
      header.removeClass("fixed-top");
    }
  });

  var startAt = 1;

  if ($(document).width() < 600) {
    startAt = 0;
  }

  if (document.querySelector(".gallery .frame")) {
    new Sly(document.querySelector(".gallery .frame"), {
      slidee: document.querySelector("gallery .slidee"),
      horizontal: 1,
      itemNav: "forceCentered",
      smart: 1,
      activateMiddle: 1,
      activateOn: "click",
      mouseDragging: 1,
      touchDragging: 1,
      releaseSwing: 1,
      startAt: startAt,
      prev: document.querySelector(".gallery .btn.prev"),
      next: document.querySelector(".gallery .btn.next")
    }).init();
  }

  if (document.querySelector(".events .frame")) {
    new Sly(document.querySelector(".events .frame"), {
      slidee: document.querySelector(".events .slidee"),
      horizontal: 1,
      itemNav: "forceCentered",
      smart: 1,
      activateMiddle: 1,
      activateOn: "click",
      mouseDragging: 1,
      touchDragging: 1,
      releaseSwing: 1,
      startAt: startAt,
      prev: document.querySelector(".events .btn.prev"),
      next: document.querySelector(".events .btn.next")
    }).init();
  }

  if ($(".galeria").length > 0) {
    $(".galeria").slick({
      // normal options...
      infinite: false,

      arrows: true,

      // the magic
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            infinite: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false
          }
        },
        {
          breakpoint: 300,
          settings: "unslick" // destroys slick
        }
      ]
    });
  }
  

  if ($("#menores").length > 0) {
    $("#menores").change(function() {
      var varlor = $(this).val();
      for (index = 0; index < varlor; index++) {
        var html =
          '<div class="input-group menorgroup-' +
          index +
          '"><div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrependto">Edad del menor:</span></div><input type="text" class="form-control" id="menor' +
          index +
          '" value="1" min="1" /></div>';
        if ($(".menorgroup-" + index).length === 0) {
          $(html).appendTo($(".menores-box"));
        }
      }
      for (index = 0; index < $(".menores-box > div").length; index++) {
        if (index > varlor - 1) {
          $(".menores-box > div")
            .eq(index)
            .remove();
        }
      }
    });
  }
  
  if ($("#lightgallery").length > 0) {
  		lightGallery(document.getElementById('lightgallery'), {
    		mode: 'lg-fade',
			cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
			share: false,
			controls: true,
			counter: false,
			zoom: false,
			fullScreen: false,
			autoplayControls: false,
			download: false
    		
		});
  }
});
