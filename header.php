<head>
	<link rel="shortcut icon" href="images/neuro_ico.ico" type="image/x-icon" />
	<link rel="icon" href="images/neuro_ico.ico" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			
	<!-- JS for the submenus-->
	<script type="text/javascript" src="js/jquery-1.js"></script>
	<script type="text/javascript" src="js/jquery_004.js"></script> 
	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/base.js"></script>

	<script src="AC_RunActiveContent.js" language="javascript"></script>
	<!-- CSS -->
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/nav.css" rel="stylesheet" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


	<!-- Scripts -->
	<script type="text/javascript">
		
		/*To put ON state on the selected tab when the tab or the subtabs are active*/
		function painttab(tab){
			switch(tab){
				//Tab 1 NEUROMAMA INFORMATION
				case 1: $("a.btn-neuinf").css("background-image","url('images/button/on/1.png')"); break;
				//Tab 2 NEUROMAMA VIDEOS AND PDFS
				case 2: $("a.btn-neuvid").css("background-image","url('images/button/on/2.png')"); break;
				//Tab 3 NEUROMAMA TABLET 10"
				case 3: $("a.btn-neutab1").css("background-image","url('images/button/on/3.png')"); break;
				//Tab 4 NEUROMAMA TABLET 8"
				case 4: $("a.btn-neutab2").css("background-image","url('images/button/on/4.png')"); break;
				//Tab 5 NEUROMAMA TABLET 7"
				case 5: $("a.btn-neutab3").css("background-image","url('images/button/on/5.png')"); break;
				//Tab 6 NEUROMAMA SMARTPHONE 5.3"
				case 6: $("a.btn-neusmart1").css("background-image","url('images/button/on/6.png')"); break;
				//Tab 7 NEUROMAMA SMARTPHONE 5"
				case 7: $("a.btn-neusmart2").css("background-image","url('images/button/on/7.png')"); break;
				//Tab 8 NEUROMAMA LAS VEGAS VACATION
				case 8: $("a.btn-neuvac1").css("background-image","url('images/button/on/8.png')"); break;
				//Tab 9 NEUROMAMA LAS VEGAS VACATION 2
				case 9: $("a.btn-neuvac2").css("background-image","url('images/button/on/9.png')"); break;
			}
		}
		/*To put OFF state on the selected tab when the tab or the subtabs are active*/
		function unpainttab(tab){
			switch(tab){
				//Tab 1 NEUROMAMA INFORMATION
				case 1: $("a.btn-neuinf").css("background-image","url('images/button/off/1.png')"); break;
				//Tab 2 NEUROMAMA VIDEOS AND PDFS
				case 2: $("a.btn-neuvid").css("background-image","url('images/button/off/2.png')"); break;
				//Tab 3 NEUROMAMA TABLET 10"
				case 3: $("a.btn-neutab1").css("background-image","url('images/button/off/3.png')"); break;
				//Tab 4 NEUROMAMA TABLET 8"
				case 4: $("a.btn-neutab2").css("background-image","url('images/button/off/4.png')"); break;
				//Tab 4 NEUROMAMA TABLET 7"
				case 5: $("a.btn-neutab3").css("background-image","url('images/button/off/5.png')"); break;
				//Tab 6 NEUROMAMA SMARTPHONE 5.3"
				case 6: $("a.btn-neusmart1").css("background-image","url('images/button/off/6.png')"); break;
				//Tab 7 NEUROMAMA SMARTPHONE 5"
				case 7: $("a.btn-neusmart2").css("background-image","url('images/button/off/7.png')"); break;
				//Tab 8 NEUROMAMA LAS VEGAS VACATION
				case 8: $("a.btn-neuvac1").css("background-image","url('images/button/off/8.png')"); break;
				//Tab 9 NEUROMAMA LAS VEGAS VACATION 2
				case 9: $("a.btn-neuvac2").css("background-image","url('images/button/off/9.png')"); break;
			}
		}
	</script>
	
        <script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
</head>
