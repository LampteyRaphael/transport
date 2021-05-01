//Different plugins are initiated here 

(function($){

	$(document).ready(function(){

		//Image sliding is done here by plugin - Add more images if you need
        $(".slider-main").backstretch([

			"{{ asset('halwa/slider-image-1.jpg') }}",
			"{{ asset('img/slider-image-2.jpg') }}"

         ], {duration: 3000, fade: 750});
		// Fixed header
		//-----------------------------------------------
		$(window).scroll(function() {
			if (($(".top-nav.fixed").length > 0)) { 
				if(($(this).scrollTop() > 0) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
				} else {
					$("body").removeClass("fixed-header-on");
				}
			};
		});

		$(window).load(function() {
			if (($(".top-nav.fixed").length > 0)) { 
				if(($(this).scrollTop() > 0) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
				} else {
					$("body").removeClass("fixed-header-on");
				}
			};
		});

        //Initializing WOW aninations
          new WOW().init();
        
		//Scroll Spy
		//-----------------------------------------------
		if($(".scrollspy").length>0) {
			$("body").addClass("scroll-spy");
			$('body').scrollspy({ 
				target: '.scrollspy',
				offset: 152
			});
		}

		//Smooth Scroll - Done - As you click at links, the gap
		//-----------------------------------------------
		if ($(".smooth-scroll").length>0) {
			$('.smooth-scroll a[href*=#]:not([href=#]), a[href*=#]:not([href=#]).smooth-scroll').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top-151
						}, 1000);
						return false;
					}
				}
			});
		}

		// Animations - Done - Content appears in MS (modernizr plugin)
		//-----------------------------------------------
		if (($("[data-animation-effect]").length>0) && !Modernizr.touch) {
			$("[data-animation-effect]").each(function() {
				var $this = $(this),
				animationEffect = $this.attr("data-animation-effect");
				if(Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
					$this.appear(function() {
						setTimeout(function() {
							$this.addClass('animated object-visible ' + animationEffect);
						}, 300);
					}, {accX: 0, accY: -130});
				} else {
					$this.addClass('object-visible');
				}
			});
		};

        //Code to send email 
          $("form").submit(function(event){
            strname=$("#yname").val();
            stremail=$("#email2").val();
            strmessage=$("#message2").val();
        
            $.post("email/send-email.php", {name:strname, email:stremail, message:strmessage },function(result){
                $("#messageconfirm").html(result);
            });                
             event.preventDefault();
         
          });


	}); 
})(this.jQuery);