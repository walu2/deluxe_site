<?php

echo <<<EOD
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/ui.css" type="text/css" media="screen"/>

        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" media="screen"/>

        <!--[if lte IE 6]>
             <link rel="stylesheet" href="css/styleIE6.css" type="text/css" media="screen"/>
        <![endif]-->
        <!-- The JavaScript -->
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.bgpos.js"></script>
        <script type="text/javascript" src="js/init_guys.js"></script>

        <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="js/fancybox/jquery.easing-1.3.pack.js"></script>
        <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
	
                
                $("a.fancy").fancybox({
                    'transitionIn'	:	'elastic',
                    'transitionOut'	:	'elastic',
                    'speedIn'		:	600, 
                    'speedOut'		:	200, 
                    'overlayShow'	:	true,
                    'autoScale' : true
                });
	
            });
        </script>
        <script type="text/javascript">
            window.___gcfg = {lang: 'pl'};
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=296994416996797";
                fjs.parentNode.insertBefore(js, fjs);
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28278052-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
  </head>
EOD;
?>