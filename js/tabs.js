
		function getFlashMovie(movieName) {
			var isIE = navigator.appName.indexOf("Microsoft") != -1;
			return (isIE) ? window[movieName] : document[movieName];
		}
				
		function pauseVideo(){
			var movie = getFlashMovie('player');
			movie.Pause();
		}
	//<!-- button image swap -->
		/*To put ON state on the selected tab when the tab or the subtabs are active*/
		function painttab(tab){
			switch(tab){
				//Tab 1 EURASIA OVERVIEW AND PHILOSOPHY
				case 1: $("a.btn-euover").css("background-image","url('/images4/on/1.png')"); break;
				//Tab 2 ISSUES AND OPPORTUNITIES
				case 2: $("a.btn-isop").css("background-image","url('/images4/on/2.png')"); break;
				//Tab 3 EURASIA BETTER IDEAS
				case 3: $("a.btn-euideas").css("background-image","url('/images4/on/3.png')"); break;
				//Tab 4 THE PEOPLE AND RESOURCES
				case 4: $("a.btn-people").css("background-image","url('/images4/on/4.png')"); break;
				//Tab 5 IMAGINE EURASIA
				case 5: $("a.btn-imagine").css("background-image","url('/images4/on/5.png')"); break;
				//Tab 6 MARKETING STRATEGIES
				case 6: $("a.btn-marketing").css("background-image","url('/images4/on/6.png')"); break;
				//Tab 7 TV/MOVIE STUDIOS AND LIVE ENTERTAINMENT
				case 7: $("a.btn-livent").css("background-image","url('/images4/on/7.png')"); break;
				//Tab 8 EURASIA DEVELOPMENT & RESOURCES
				case 8: $("a.btn-develop").css("background-image","url('/images4/on/8.png')"); break;
				//Tab 9 EURASIA AMUSEMENT CENTERS
				case 9: $("a.btn-amuse").css("background-image","url('/images4/on/9.png')"); break;
			}
		}
		/*To put OFF state on the selected tab when the tab or the subtabs are active*/
		function unpainttab(tab){
			switch(tab){
				//Tab 1 EURASIA OVERVIEW AND PHILOSOPHY
				case 1: $("a.btn-euover").css("background-image","url('/images4/off/1.png')"); break;
				//Tab 2 ISSUES AND OPPORTUNITIES
				case 2: $("a.btn-isop").css("background-image","url('/images4/off/2.png')"); break;
				//Tab 3 EURASIA BETTER IDEAS
				case 3: $("a.btn-euideas").css("background-image","url('/images4/off/3.png')"); break;
				//Tab 4 THE PEOPLE AND RESOURCES
				case 4: $("a.btn-people").css("background-image","url('/images4/off/4.png')"); break;
				//Tab 5 IMAGINE EURASIA
				case 5: $("a.btn-imagine").css("background-image","url('/images4/off/5.png')"); break;
				//Tab 6 MARKETING STRATEGIES
				case 6: $("a.btn-marketing").css("background-image","url('/images4/off/6.png')"); break;
				//Tab 7 TV/MOVIE STUDIOS AND LIVE ENTERTAINMENT
				case 7: $("a.btn-livent").css("background-image","url('/images4/off/7.png')"); break;
				//Tab 8 EURASIA DEVELOPMENT & RESOURCES
				case 8: $("a.btn-develop").css("background-image","url('/images4/off/8.png')"); break;
				//Tab 9 EURASIA AMUSEMENT CENTERS
				case 9: $("a.btn-amuse").css("background-image","url('/images4/off/9.png')"); break;
			}
		}

		function getXMLTagName(a_doc, a_attribute) {
			var sep = '</' + a_attribute + '>';
			var arraytags = a_doc.toString().split('</' + a_attribute + '>');
			arraytags.length = arraytags.length - 1;
			for (var i = 0; i < arraytags.length; i++) {
				arraytags[i] = arraytags[i] + sep;
				//alert(arraytags[i]);
			}
			return arraytags;
		}

		function getXMLFirstNode(a_doc, a_attribute) {
			return getXMLNodeValue(a_doc, a_attribute);
		}
		function getXMLNodeValue2(a_node, a_attribute,a_attribute2) {
			var theXML = a_node.toString();
			var aStr = a_attribute.toString();
			var aStr2 = a_attribute2.toString();
			var sStart = '<' + aStr + '>';
			var sEnd = '</' + aStr2 + '>';
			var index1 = -1;
			var index2 = 0;
			index1 = theXML.indexOf(sStart);
			index2 = theXML.indexOf(sEnd, index1);
			if (index1 != -1 && index2 > index1) {
				output = theXML.substring(index1 + sStart.length, index2);
				return output; //OUTPUT IT PROPERLY.
			}
			else {
				return undefined;
			}
		}
		function isValid(a_obj) {
			return (a_obj != undefined && a_obj != null);
		}
		function getXMLNodeValue(a_node, a_attribute) {
			var theXML = a_node.toString();
			var aStr = a_attribute.toString();
			var sStart = '<' + aStr + '>';
			var sEnd = '</' + aStr + '>';
			var index1 = -1;
			var index2 = 0;
			index1 = theXML.indexOf(sStart);
			index2 = theXML.indexOf(sEnd);
			if (index1 != -1 && index2 > index1) {
				output = theXML.substring(index1 + sStart.length, index2);
				return output; //OUTPUT IT PROPERLY.
			}
			else {
				return undefined;
			}
		}
		var f_curFinishFunction = function(response) {
			//jQuery('#flashvideo').fadeIn('slow');
			jQuery('#HomeGallery').hide();
			var Details22 = document.getElementById('HomeGallery');
			Details22.innerHTML = "<div id=\"Detail\">        <div id=\"DetailHeader\"> </div>        <div id=\"DetailCopy\"></div></div>    ";
			document.title = getXMLNodeValue(response, ('title'));
			var Details1 = document.getElementById('DetailCopy');
			Details1.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));
			//DetailHeader
			var Details3 = document.getElementById('DetailHeader');
			Details3.innerHTML = getXMLNodeValue2(response, ('div id="DetailHeader"'), ('div'));
			jQuery('#HomeGallery').fadeIn('slow');
			jQuery('#Detail1').hide();
			jQuery('#Detail3').hide();
		}
		var f_curFinishFunction2 = function(response) {
			//jQuery('#flashvideo').fadeIn('slow');
			jQuery('#HomeGallery').hide();
			var Details22 = document.getElementById('HomeGallery');
			Details22.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));     		
			document.title = getXMLNodeValue(response, ('title'));
			jQuery('#HomeGallery').fadeIn('slow');
		}
		
	function getNewPage(page_url) {
		if(page_url.toString().indexOf("../index.php") != -1){
			//jQuery('#HomeGallery').hide();
			ajax(page_url, '', f_curFinishFunction2);
			//jQuery('#HomeGallery').fadeIn('slow');
		}
		else{
			//jQuery('#HomeGallery').hide();
			ajax(page_url, '', f_curFinishFunction);
			//jQuery('#HomeGallery').fadeIn('slow');
		}
	}