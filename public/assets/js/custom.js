"use strict";
(function () {
	$(document).on('submit','#newsletter-frm', function(e){
		e.preventDefault();
		let email = $('.sub-email').val();
		let route = $(this).attr('action');
		$.ajaxSetup({
		   headers: {
		     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
		});
		$.ajax({
            url:route,
            type:"GET",
            data: { email },
            success: function(data){
                handleSuccess();
            }
        });
	});

	function handleSuccess()
	{
		$('#sub-alert').removeClass('hide');
		$('.sub-email').val('');
	}

function updateSliderArrowsStatus(
  cardsContainer,
  containerWidth,
  cardCount,
  cardWidth
) {
  if (
    $(cardsContainer).scrollLeft() + containerWidth <
    cardCount * cardWidth + 15
  ) {
    $("#slide-right-container").addClass("active");
  } else {
    $("#slide-right-container").removeClass("active");
  }
  if ($(cardsContainer).scrollLeft() > 0) {
    $("#slide-left-container").addClass("active");
  } else {
    $("#slide-left-container").removeClass("active");
  }
}
$(function() {
  // Scroll products' slider left/right
  let div = $("#cards-container");
  let cardCount = $(div)
    .find(".cards")
    .children(".card").length;
  let speed = 1000;
  let containerWidth = $(".container").width();
  let cardWidth = 250;

  updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);

  //Remove scrollbars
  $("#slide-right-container").click(function(e) {
    if ($(div).scrollLeft() + containerWidth < cardCount * cardWidth) {
      $(div).animate(
        {
          scrollLeft: $(div).scrollLeft() + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });
  $("#slide-left-container").click(function(e) {
    if ($(div).scrollLeft() + containerWidth > containerWidth) {
      $(div).animate(
        {
          scrollLeft: "-=" + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });

  // If resize action ocurred then update the container width value
  $(window).resize(function() {
    try {
      containerWidth = $("#cards-container").width();
      updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
    } catch (error) {
      console.log(
        `Error occured while trying to get updated slider container width: 
            ${error}`
      );
    }
  });
});

const platforms = document.querySelector('.platforms .slide-track')

const rollingAnimation = platforms.animate([
  { transform: 'translateX(0)' },
  { transform: `translateX(${-200 * 13}px)` }
],
  { iterations: Infinity, duration: 80 * 1000 });

function rollCarousel() {
  rollingAnimation.play()
}

function pauseCarousel() {
  rollingAnimation.pause();
}

platforms.addEventListener('mouseover', pauseCarousel)
platforms.addEventListener('mouseout', rollCarousel)

if (window.matchMedia("(max-width: 800px)").matches) {
    transform: `translateX(${-150 * 13}px)`
}


$('a.taphover').on("touchstart", function (e) {
    "use strict"; //satisfy the code inspectors
    var link = $(this); //preselect the link
    if (link.hasClass('hover')) {
        return true;
    } else {
        link.addClass("hover");
        $('a.taphover').not(this).removeClass("hover");
        e.preventDefault();
        return false; //extra, and to make sure the function has consistent return points
    }
});
}());