			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- Tabs script -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
		<script>
		/*my lovely util functions*/
/*active class*/

function activate() {
	this.name = "active";
	this.init = function (el) {
		el.addClass("active").siblings().removeClass("active");
	}
}
/*get size of element*/
function size() {
	this.width = function (el) {
		return el.width();
	}
	this.height = function (el) {
		return el.height();
	}
}

function bgSizeMatch(el) {
	var activeW = el.width();
	alter.nav.css({
		"background-size": activeW + "px 100px"
	});
}

function bgPos() {
	this.init = function (el) {
		offset = el.position().left;
		corrections = el.parent().offset().left;
		offset = offset - corrections;
		alter.nav.animate({
			"background-position": offset + "px"
		});
	}
}

function adjust() {
	this.init = function (el) {
		var adjustActive = el.index() + 1;
		return adjustActive;
	}
}

function slide() {
	this.init = function (multiplier) {
		var amount = multiplier * $(window).width();
		return amount + "px";
	}
}

/*element vars*/
var alter = {
	nav: $(".slide-tab .navbar-nav"),
	navItem: $(".slide-tab ul:not(.control) li"),
	navItemActive: $(".slide-tab ul:not(.control) li.active"),
	navControl: $(".control"),
}

/*what utils we are using today*/
bgSizeMatch($(".active"));
size = new size();
active = new activate();
bgPos = new bgPos();
adjust = new adjust();
slide = new slide();

slideTab = { //main function
	init: function () {

		alter.navItem.click(function (e) {
			bgSizeMatch($(this));
			active.init($(this));
			bgPos.init($(this));

      /*Prototyping scroll reset offset center*/
      var offset = $(this).position().left;


			var index = $(this).index();
			var clickAmount = slide.init(index);

			$(".content").parent().parent().animate({
				scrollLeft: clickAmount + "px"
			}, 300);
		});


		//measure total child width, designed responsively too.
		var acumWidth = 0;
		alter.navItem.each(function () {
			var itemWidth = $(this).width();
			acumWidth += itemWidth;
			//corrcetion
			var controlWidth = alter.navControl.width();
			$(this).parent().css({
				"width": acumWidth + controlWidth + "px"
			});
		});



		$(window).bind('resizeEnd', function () {
			//get the new window size and return it from this special event
		});


		function tab() {
			this.left = function () {
				var prev = $(".active").prev();
				var prevI = $(".active").prev().index();
				var leftAmount = slide.init(prevI);

				active.init(prev);
				bgPos.init(prev);
				bgSizeMatch(prev);

				$(".content").parent().parent().animate({
					scrollLeft: leftAmount + "px"
				}, 300);
			}
			this.right = function () {
				var next = $(".active").next();
				var nextI = $(".active").next().index();
				var rightAmount = slide.init(nextI);

				active.init(next);
				bgPos.init(next);
				bgSizeMatch(next);

				$(".content").parent().parent().animate({
					scrollLeft: rightAmount + "px"
				}, 300);
			}
		}
		tab = new tab();

		$(".half[data='right'] .click").click(function () {
			tab.right();
		});
		$(".half[data='left'] .click").click(function () {
			tab.left();
		});
		$(".half").swipe({
			swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
				if (direction == "left") {
					tab.right();
				} else if (direction == "right") {
					tab.left();
				}
			}
		});
	}
}

$(function () {
	$(slideTab.init);
});
</script>

<script>
$('.collapse').collapse()
</script>

	</body>
</html>
