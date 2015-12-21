
    $(document).ready(function() {
		$('.scrollTo').click( function() {
			var page = $(this).attr('href');
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed );
			return false;
		});
    });


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70463663-1', 'auto');
  ga('send', 'pageview');


function dateAffichage(){
if (myDate.getYear()===myTimestamp.getYear() && myDate.getMonth()===myTimestamp.getMonth() && myDate.getDay()===myTimestamp.getDay()){alert("plop");
    $(document).ready(function(){alert("plop");
                      console.log('test');
                      alert("plop");
                      $('#pgm').load("http://localhost/blizzart/includes/includesProgramme.php", function() {alert("plop");});
                      });
    }
}

