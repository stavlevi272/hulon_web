var mainSlideShowIntervalId = 0;
		
function stopSlideShow()
{
	if(isValidSlideShow())
	{
		clearInterval(mainSlideShowIntervalId);
	}
}

function startSlideShow()
{
	if(isValidSlideShow())
	{
		mainSlideShowIntervalId = setInterval("slideSwitch()", 7000);
	}
}

function slideSwitch() 
{
	var $active = $('#mainSlider DIV.activeSlide');
	
	var totalNumOfElements = $('#mainSlider').children().size();
	var currentlyEndingID = $active.get(0).id;
	var currentlyEndingIndex = currentlyEndingID.charAt(currentlyEndingID.length-1);
	var nextIndex = (parseInt(currentlyEndingIndex)%totalNumOfElements)+1;

	if ( $active.length == 0 ) $active = $('#mainSlider DIV:last');			
	var $next =  $active.next().length ? $active.next(): $('#mainSlider DIV:first');
	$active.addClass('last-activeSlide');
	
	$('#mainSliderNav div').each(function(){
		var tmpIndex = this.id.charAt(this.id.length-1);
		var activeClass = new String('sliderNavActive_'+tmpIndex);
		var normalClass = new String('sliderNavNormal_'+tmpIndex);
		
		if((tmpIndex==currentlyEndingIndex) && this.className.indexOf('sliderNavActive_')>-1)
		{
			this.className = normalClass;
		}
		else
		{
			if((nextIndex==tmpIndex) && this.className.indexOf('sliderNavNormal_')>-1)
			{
				this.className = activeClass;
			}
		}
	});

    $next.css({opacity: 0.0})
    	.addClass('activeSlide')
    	.animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('activeSlide last-activeSlide');
        });
}

function activateSlide(index)
{
	if(isValidSlideShow())
	{
		$('#mainSliderNav div').each(
			function(intIndex)
			{
				this.className = new String('sliderNavNormal_'+(intIndex+1));
				if(this.id == 'sliderNav'+index)
				{
					this.className = new String('sliderNavActive_'+(intIndex+1));
				}
			}
		);
		
		$('#mainSlider DIV').each(
			function(intIndex)
			{
				if(this.id == 'mainSlide'+index)
				{
					$(this).addClass('activeSlide');
				}
				else
				{
					$(this).removeClass('activeSlide last-activeSlide');
				}
			}
		);
	}
}

function isValidSlideShow()
{
	if(($('#mainSliderNav DIV').length > 1) && ($('#mainSlider DIV').length > 1))
	{
		return true;
	}
	return false;
}

$(function() {
	if(isValidSlideShow())
	{
		$('#mainSliderNav').css("display","inline");
		startSlideShow();
	}
	//else
	//{
	//	$('#mainSliderNav').css("display","none");
	//}
});


//****************************************************************************************************************
// ACTIVATE HOME PAGE WIDE SLIDER
$('#wideSlider').cycle({
	fx:			'scrollHorz',	// name of transition effect (or comma separated names, ex: fade,scrollUp,shuffle)
	timeout:	7000,			// milliseconds between slide transitions (0 to disable auto advance)
	speed:		1000,			// speed of the transition (any valid fx speed value)
	next:		'#wideNavNext',	// selector for element to use as click trigger for next slide
    prev:		'#wideNavPrev',	// selector for element to use as click trigger for previous slide
    pause:		1,				// true to enable "pause on hover"
    delay:		1000			// additional delay (in ms) for first transition (hint: can be negative)
});

function pauseWideSlider()
{
	$('#wideSlider').cycle('pause');
}

function resumeWideSlider()
{
	$('#wideSlider').cycle('resume');
}
//****************************************************************************************************************

//****************************************************************************************************************
// ACTIVATE HOME PAGE NARROW SLIDER
$('#smallSlider').cycle({
	fx:			'scrollHorz',		// name of transition effect (or comma separated names, ex: fade,scrollUp,shuffle)
	timeout:	7000,				// milliseconds between slide transitions (0 to disable auto advance)
	speed:		1000,				// speed of the transition (any valid fx speed value)
	next:		'#smallNavNext',	// selector for element to use as click trigger for next slide
    prev:		'#smallNavPrev',	// selector for element to use as click trigger for previous slide
    pause:		1,					// true to enable "pause on hover"
    delay:		1000				// additional delay (in ms) for first transition (hint: can be negative)
});

function pauseNarrowSlider()
{
	$('#smallSlider').cycle('pause');
}

function resumeNarrowSlider()
{
	$('#smallSlider').cycle('resume');
}
//****************************************************************************************************************

//****************************************************************************************************************
// ACTIVATE TOP NAVIGATOR
$(document).ready(function(){ 
	$("ul.sf-menu").superfish({ 
		speed:			400,
		delay:			400,
		disableHI:		true,
		autoArrows:		false,
		dropShadows:	false
	}); 
});
//****************************************************************************************************************

/****************************************************************************************************************
// FLASH BANNERS ON SIDES
$(document).ready(function() 
{
	if(isBanksHomePageURL())
	{
		var imgW = 100;
		var imgH = 390;
		
		var leftFlash = '<script type="text/javascript">ActivateFlashControlWithEmbedID("left_adverBanner" , "width='+imgW+' height='+imgH+'" , "" , "/flash/leftSide.swf", "/flash/leftSide.swf", "", "leftSideID");</script>';
		var rightFlash = '<script type="text/javascript">ActivateFlashControlWithEmbedID("right_adverBanner" , "width='+imgW+' height='+imgH+'" , "" , "/flash/rightSide.swf", "/flash/rightSide.swf", "", "rightSideID");</script>';
		
		if (screen.width >= 1024) 
		{
			$('#parentWrapperPage').wrap('<div id="adverWrapper"/>');
			$('#adverWrapper').css('width', '1000px');
			$('#adverWrapper').css('margin', '0px auto');
		
			$('#parentWrapperPage').before('<DIV id="left_adverBanner">' + leftFlash + '</DIV>');
			$('#parentWrapperPage').after('<DIV id="right_adverBanner">' + rightFlash + '</DIV>');
			
			$('#parentWrapperPage').css('float', 'left');
			
			$('#left_adverBanner').css('width', imgW + 'px');
			$('#left_adverBanner').css('height', imgH + 'px');
			$('#left_adverBanner').css('margin', '119px 6px 0px 4px');
			$('#left_adverBanner').css('border', '1px solid #b9c0c8');
			$('#left_adverBanner').css('float', 'left');
			
			$('#right_adverBanner').css('width', imgW + 'px');
			$('#right_adverBanner').css('height', imgH + 'px');
			$('#right_adverBanner').css('margin', '119px 4px 0px 6px');
			$('#right_adverBanner').css('border', '1px solid #b9c0c8');
			$('#right_adverBanner').css('float', 'left');
		}
	}
});
	
function isBanksHomePageURL()
{
	var currUrl = (window.location.href).toLowerCase();
	
	if(currUrl!=null && currUrl != 'undefined')
	{
		if(currUrl.indexOf("?")>-1)
		{
			return false;
		}
		if(currUrl.indexOf("/PoalimPrivate/main".toLowerCase())>-1)
		{
			return true;
		}
		
		if(currUrl.indexOf("://")>-1)
		{
			var tmp = currUrl.substring(currUrl.indexOf("://") + "://".length , currUrl.length);
			if(tmp.indexOf("/")>-1)
			{
				var restOfUrl = tmp.substring(tmp.indexOf("/") + 1 , tmp.length);
				if(restOfUrl.length>0)
				{
					return false;
				}
				else
				{
					return true;
				}
			}
			else
			{
				return true;
			}
		}
	}
	return false;
}

****************************************************************************************************************/

