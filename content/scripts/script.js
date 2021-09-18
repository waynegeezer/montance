var screenWidth = $(window).width();
$(window).scroll(function(){
	scroll = $(window).scrollTop();
	if (scroll >= 50) {
		$(".navbar").addClass("sticky-header");
	}
	else {
		$(".navbar").removeClass("sticky-header");
	}
});

function calcTime(offset) {
    d = new Date();
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);
    convert = new Date(utc + (3600000*offset));
    return convert.toLocaleString();
}

function mixItUptitleToClass() {
    const mixes = document.getElementsByClassName("mix");
    Array.from(mixes).forEach((mix) => {
        let stringTitle = mix.querySelector(".icon-content").textContent,
            classNameTitle = stringTitle.split(" ").join("");
        mix.classList.add(classNameTitle.toLowerCase().trim());
    });
}

var optionTexts = [];
function checkResourcesItems() {
    var optionTexts = [];
    $(".mix:visible").each(function() { 
        optionTexts.push($(this));
    });
    $("#resources-count").html(optionTexts.length);
}

$(document).ready(function() {
    checkResourcesItems();
    // dark theme process
        $('.nav-theme').click(function() {
            $('body').toggleClass('dark-theme');
            $(this).toggleClass('active');
        });
    // end
    // get local time
        var localTime = calcTime('-4');
        $('#current-time').html(localTime.split(", ").pop());
    // end
    // Count
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    // end
    // mixit up filter
        if ($("section").hasClass("section-resources")) {
            var containerEl = document.getElementById('mixitup-container');
            var inputSearch = document.getElementById('search-input-filter');
            var keyupTimeout;
            var searchValue = " ";
            $('#mixitup-fail-message').hide();
            var mixer = mixitup(containerEl, {
                selectors: {
                    control: '[data-filter]'
                },
                animation: {
                    queueLimit: 5,
                    duration: 200,
                    easing: 'ease'
                },
                callbacks: {
                    onMixEnd: function(state){
                        if(state.hasFailed){  
                            $('#mixitup-fail-message').fadeIn();
                            $('.filter-content-block').addClass('remove-bg');
                            checkResourcesItems();
                        } else {
                            $('#mixitup-fail-message').hide();
                            checkResourcesItems()
                        }
                    },
                    onMixClick: function() {
                        $('.icon-content-block.mix').removeClass('hide');
                        $('.filter-content-block').addClass('remove-bg');
                        $('.load-more-resources').hide();
                        inputSearch.value = '';
                   }
                }
            });
            inputSearch.addEventListener('keyup', function() {
                mixItUptitleToClass();
                var searchValue;
                if (!inputSearch.value.length == '') {
                    $('.icon-content-block.mix').removeClass('hide');
                    $('.filter-content-block').addClass('remove-bg');
                    $('.load-more-resources').hide();
                    if(screenWidth <= 767) {
                        $('.filter-block .filter-name span').text('-');
                    }
                }
                searchValue = inputSearch.value.toLowerCase().trim();
                // Very basic throttling to prevent mixer thrashing. Only search
                // once 350ms has passed since the last keyup event
                clearTimeout(keyupTimeout);
                keyupTimeout = setTimeout(function() {
                    filterByString(searchValue);
                }, 350);
            });
            function filterByString(searchValue) {
                if (searchValue) {
                    // Use an attribute wildcard selector to check for matches
                    mixer.filter('[class*="' + searchValue + '"]');
                } else {
                    // If no searchValue, treat as filter('all')
                    mixer.filter('all');
                }
            }
            $('.load-more-resources').click(function() {
                $('.icon-content-block.mix').removeClass('hide');
                $('.filter-content-block').addClass('remove-bg');
                $(this).hide();
                checkResourcesItems();
            });
        }
    // end
    // load more publications
        $('.load-more-publications').click(function() {
            $('.img-content-block.hide').removeClass('hide');
            $(this).hide();
        });
    // end
    // Bootstrap carousel
        $('.carousel-soc-class').carousel({
            interval: false
        });
    // // end
    // Owl Carousel
        if ($("section").hasClass("section-testimonials")) {
            $('.carousel-testimonials').owlCarousel({
                mouseDrag:true,
                loop:true,
                margin:0,
                center:true,
                smartSpeed:1200,
                nav:true,
                navText: [
                "<img src='content/images/icons/arrow-circular-right.svg' alt=''>",
                "<img src='content/images/icons/arrow-circular-right.svg' alt=''>"
                ],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        center:false
                    },
                    992:{
                        items:3
                    }
                }
            });
        }
        if ($("section").hasClass("section-upcoming-classes")) {
            $('.carousel-upcoming-classes').owlCarousel({
                mouseDrag:true,
                loop:true,
                margin:0,
                autoWidth:true,
                smartSpeed:1200,
                nav:true,
                navText: [
                "<img src='content/images/icons/arrow-circular-right.svg' alt=''>",
                "<img src='content/images/icons/arrow-circular-right.svg' alt=''>"
                ],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        autoWidth:false
                    },
                    576:{
                        items:3
                    }
                }
            });
        }
    // end
    //Timeline
        $("#montance-timeline").mCustomScrollbar({
            axis:"x", // horizontal scrollbar
            mouseWheel: false,
            scrollbarPosition: "outside"
        });
    //end
});