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

/* AOS */ 
$(window).on("load resize", function () {
    if ($(window).width() > 1199) {
        AOS.init({
            disable:"mobile,tablet,phone",
            duration:1000,
            once: true
        });
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

// local storage for dark theme
$('.nav-theme').click(function() {
    sessionStorage.clear();
    $('body').toggleClass('dark-theme');
    $(this).toggleClass('active');
    if($('body').hasClass('dark-theme')) {
        sessionStorage.setItem('theme', 'dark-theme');
    } 
});

$(document).ready(function() {
    // $(document).bind("contextmenu",function(e){
    //   return false;
    // });
    // image tilt
        if($('div').hasClass('data-tilt')) {
            $('.js-tilt').tilt({
                maxTilt: 15,
                scale: 1.1,
                perspective: 200,
                speed: 1000
            });
        }
    // end
    checkResourcesItems();
    // dark theme process
        var theme = sessionStorage.getItem('theme');
        if(theme !== '') {
            $('body').addClass(theme);
        } 
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
    // load more presentations
        $('.load-more-presentations').click(function() {
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
                loop:false,
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
        if ($("section").hasClass("section-timeline")) {
            $("#montance-timeline").mCustomScrollbar({
                axis:"x", // horizontal scrollbar
                mouseWheel: false,
                scrollbarPosition: "outside"
            });
        }
    //end


    $("input, textarea").keypress(function(){
        $(this).parent().find(".icon-img").removeClass("error");
    });

    $("textarea, input").val("");

    var name_holder;
    var email_holder;
    var subscribe_email_holder;
    var message_holder

    $('.contact-submit').click(function(){

        var isValidchk = false;
        var inp_name = $(".name").val();
        var inp_email = $(".email").val();
        var inp_message = $(".message").val();
        var email_filter = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
        var name_filter = /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
        /*var phone_filter = /^(?:\+91(?:-)?|0\d{2,4}-|0|)\d{10,10}$/;*/
        var phone_filter = /^[0-9-+()\s]*$/;


        if (inp_name.length <= 0 || !inp_name.match(name_filter)) {
            $(".name").addClass("error");
            isValidchk = true;
        } else {
            $(".name").removeClass("error");
        }

        if (inp_email.length <= 0 || !inp_email.match(email_filter)){
            $(".email").addClass("error");
            isValidchk = true;
        }else{
            $(".email").removeClass("error");
        }


        if (isValidchk == false) {
            console.log(inp_name, inp_email, inp_message)
            name_holder = inp_name;
            email_holder = inp_email;
            message_holder = inp_message
            $(".form-group").hide();
            $(".ty-div").removeClass("d-none");

                $.ajax({   
                  type:"POST",   
                  url: "contactFormSubmit.php",
                  data: {
                    name: name_holder,
                    senderemail: email_holder,
                    message: message_holder
                  },
                  success: function(data) {
                    console.log(data);
                  }
                }); 
            return false;

        };
    });

    $('.subscribe-btn').click(function(){

        var isValidchk = false;
        var inp_email = $(".subscribe-email").val();
        var email_filter = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

        if (inp_email.length <= 0 || !inp_email.match(email_filter)){
            $(".subscribe-block").addClass("error");
            isValidchk = true;
        }else{
            $(".subscribe-block").removeClass("error");
        }

        if (isValidchk == false) {
            console.log(inp_email)
            subscribe_email_holder = inp_email;
            $(".subscribe-btn-block").hide();
            $(".subscribe-email").hide();
            $(".subscribe-block p").removeClass("d-none");
            $(".subscribe-block").addClass("border-0");

                $.ajax({   
                  type:"POST",   
                  url: "subscribeFormSubmit.php",
                  data: {
                    senderemail: subscribe_email_holder
                  },
                  success: function(data) {
                    console.log(data);
                  }
                }); 
            return false;

        };
    });

    $('.notify-btn').click(function(){

        var isValidchk = false;
        var inp_email = $(".notify-email").val();
        var email_filter = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

        if (inp_email.length <= 0 || !inp_email.match(email_filter)){
            $(".notify-block").addClass("error");
            isValidchk = true;
        }else{
            $(".notify-block").removeClass("error");
        }

        if (isValidchk == false) {
            console.log(inp_email)
            subscribe_email_holder = inp_email;
            $(".notify-btn-block").hide();
            $(".notify-email").hide();
            $(".notify-block p").removeClass("d-none");
            $(".notify-block").addClass("border-0");

                $.ajax({   
                  type:"POST",   
                  url: "notifyFormSubmit.php",
                  data: {
                    senderemail: subscribe_email_holder
                  },
                  success: function(data) {
                    console.log(data);
                  }
                }); 
            return false;

        };
    });

});

(function ($){
    $.fn.responsiveTabs = function() {
        if(screen_width < 768){
            this.append($('<span class="dropdown-arrow"></span>'));
        }
        this.addClass('responsive-tabs'),
        this.on("click", "li > a.active, span.dropdown-arrow", function (){
                this.toggleClass('open');
            }.bind(this)), this.on("click", "li > a:not(.active)", function() {
                this.removeClass("open")
            }.bind(this)); 
    }
})(jQuery);