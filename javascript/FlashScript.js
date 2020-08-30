function ActivateFlashControl(ObjID, APARAMS, AALIGN, AMOVIE, ASRC, NOEMBD)
{
	Widh=APARAMS
	New_Widh=Widh.split(" ")[0]
	New_Widh=New_Widh.slice(6)
		
	Hig=APARAMS
	New_Hig=Hig.split(" ")[1]
	New_Hig=New_Hig.slice(7)
	
	var d = document.getElementById(ObjID);
	var replaceObject = "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http" + (window.location.protocol.indexOf('https:')==0?'s':'') + "://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' " + APARAMS + " "+AALIGN+"   alt='" + NOEMBD + "'  title='" + NOEMBD + "' >"+
				"<param name='movie' value='" + AMOVIE +"' />"+
				"<param name='wmode' value='transparent' />"+
				"<param name='quality' value='high' />"+
				"<param name='allowScriptAccess' value='always' />"+
				"<embed quality='high' width='" + New_Widh + "' height='" + New_Hig +  "' wmode='transparent' allowScriptAccess='always' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' src='" + ASRC + "' >"+ 
				"<noembed>" + NOEMBD + "</noembed></embed>"+
			"</object>";
			d.innerHTML = replaceObject;
}




function ActivateFlashControlWithEmbedID(ObjID, APARAMS, AALIGN, AMOVIE, ASRC, NOEMBD, EID)
{
	Widh=APARAMS
	New_Widh=Widh.split(" ")[0]
	New_Widh=New_Widh.slice(6)
		
	Hig=APARAMS
	New_Hig=Hig.split(" ")[1]
	New_Hig=New_Hig.slice(7)
	
	var d = document.getElementById(ObjID);
	var replaceObject = "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http" + (window.location.protocol.indexOf('https:')==0?'s':'') + "://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' " + APARAMS + " "+AALIGN+"   alt='" + NOEMBD + "'  title='" + NOEMBD + "' >"+
				"<param name='movie' value='" + AMOVIE +"' />"+
				"<param name='wmode' value='transparent' />"+
				"<param name='quality' value='high' />"+
				"<param name='menu' value='false' />"+
				"<param name='allowScriptAccess' value='always' />"+
				"<param name='allowNetworking' value='all' />"+
				"<embed id='"+EID+"' name='"+EID+"' quality='high' width='" + New_Widh + "' height='" + New_Hig +  "' wmode='transparent' allowScriptAccess='always' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' src='" + ASRC + "' >"+ 
				"<noembed>" + NOEMBD + "</noembed></embed>"+
			"</object>";
			d.innerHTML = replaceObject;
}