window.onload=function(){
			var client_ip=null;
			var device_type=null;
			var device_os=null;
			var browser=null;
			var httpobject=null;
			var httpobject_data=null;
			var city=null;
			var state=null;
			var country=null;
			var map;
			var http_referrer = document.location;
		
			var is_declined = false;				
			Detect_location();
			 
        		function Detect_ip()
				{
					//console.log('Ip Address');
					
						
				}
				function getUserIP(onNewIP) { //  onNewIp - your listener function for new IPs
					//compatibility for firefox and chrome
					var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
					var pc = new myPeerConnection({
						iceServers: []
					}),
					noop = function() {},
					localIPs = {},
					ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
					key;
				
					function iterateIP(ip) {
						if (!localIPs[ip]) onNewIP(ip);
						localIPs[ip] = true;
					}
				
					 //create a bogus data channel
					pc.createDataChannel("");
				
					// create offer and set local description
					pc.createOffer(function(sdp) {
						sdp.sdp.split('\n').forEach(function(line) {
							if (line.indexOf('candidate') < 0) return;
							line.match(ipRegex).forEach(iterateIP);
						});
						
						pc.setLocalDescription(sdp, noop, noop);
					}, noop); 
				
					//listen for candidate events
					pc.onicecandidate = function(ice) {
						if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
						ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
					};
				}
				
				// Usage
				getUserIP(function(ip){
					//document.getElementById("ip").innerHTML = 'Got your IP ! : '  + ip + " | verify in http://www.whatismypublicip.com/";
					var ipaddress = ip;
					//console.log(ipaddress);
					client_ip = ipaddress;
					//console.log("Client IP :-  " + client_ip)
					//document.getElementById("ipclient").innerHTML = client_ip;
					//return ipaddress;
				});
						
				/***********************************************************/
				
				function Detect_device()
				{
					//console.log('Device Type');	
					
					var x = screen.width;
					//document.getElementById("demo").innerHTML = x;
					
					if ((x<=2560) && (x>1440)) {
					 // console.log('pro');
					  device_type = "Projecter Device";
					 }
					else if ((x<=1440) && (x>1280)) {
					  //console.log('lcd');
					  device_type = "LCD Device";
					 }
					else if ((x<=1280) && (x>1024)) {
					  //console.log('lp');
					 device_type = "PC Device";
					 }
					else if((x<=1024) && (x>768))
					 {
					  //console.log('sm lp');
					 device_type = "LapTop Device";
				   }
				   
					else if((x<=768) && (x>425))
					 {
					  //console.log('tab');
					device_type = "Tablet Device";
				   }
				   
					else if((x<=425) && (x>375))
					 {
					  //console.log('md mob');
					 device_type = "Medium Mobile Device";
				   }
				   
					else if((x<=375) && (x>320))
					 {
					  //console.log('sm mob');
					  device_type = "Small Mobile Device";
				   }
					else if((x<=320) && (x>0))
					 {
					  //console.log('mob');
					 device_type = "Mobile Device";
				   }

				}
				
				function Detect_os()
				{
					//console.log('Detect os');
					
					device_os = "Unknown OS";
					if (navigator.appVersion.indexOf("Win")!=-1) device_os="Windows";
					if (navigator.appVersion.indexOf("Mac")!=-1) device_os="MacOS";
					if (navigator.appVersion.indexOf("X11")!=-1) device_os="UNIX";
					if (navigator.appVersion.indexOf("Linux")!=-1) device_os="Linux";
					if (navigator.appVersion.indexOf("Android")!=-1) device_os="Android";
					//document.write('Your OS: '+device_os);
				}
				
				
				function Detect_browser()
				{
					//console.log('Detect_browser');
					
					var nVer = navigator.appVersion;
					var nAgt = navigator.userAgent;
					var browserName  = navigator.appName;
					var fullVersion  = ''+parseFloat(navigator.appVersion); 
					var majorVersion = parseInt(navigator.appVersion,10);
					var nameOffset,verOffset,ix;
					
					// In Opera, the true version is after "Opera" or after "Version"
					if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
					 browserName = "Opera";
					 fullVersion = nAgt.substring(verOffset+6);
					 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
					   fullVersion = nAgt.substring(verOffset+8);
					}
					// In MSIE, the true version is after "MSIE" in userAgent
					else if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
					 browserName = "Microsoft Internet Explorer";
					 fullVersion = nAgt.substring(verOffset+5);
					}
					// In Chrome, the true version is after "Chrome" 
					else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
					 browserName = "Chrome";
					 fullVersion = nAgt.substring(verOffset+7);
					}
					// In Safari, the true version is after "Safari" or after "Version" 
					else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
					 browserName = "Safari";
					 fullVersion = nAgt.substring(verOffset+7);
					 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
					   fullVersion = nAgt.substring(verOffset+8);
					}
					// In Firefox, the true version is after "Firefox" 
					else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
					 browserName = "Firefox";
					 fullVersion = nAgt.substring(verOffset+8);
					}
					// In most other browsers, "name/version" is at the end of userAgent 
					else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < 
							  (verOffset=nAgt.lastIndexOf('/')) ) 
					{
					 browserName = nAgt.substring(nameOffset,verOffset);
					 fullVersion = nAgt.substring(verOffset+1);
					 if (browserName.toLowerCase()==browserName.toUpperCase()) {
					  browserName = navigator.appName;
					 }
					}
					// trim the fullVersion string at semicolon/space if present
					if ((ix=fullVersion.indexOf(";"))!=-1)
					   fullVersion=fullVersion.substring(0,ix);
					if ((ix=fullVersion.indexOf(" "))!=-1)
					   fullVersion=fullVersion.substring(0,ix);
					
					majorVersion = parseInt(''+fullVersion,10);
					if (isNaN(majorVersion)) {
					 fullVersion  = ''+parseFloat(navigator.appVersion); 
					 majorVersion = parseInt(navigator.appVersion,10);
					}
					
					/*document.write(''
					 +'Browser name  = '+browserName+'<br>'
					 +'Full version  = '+fullVersion+'<br>'
					 +'Major version = '+majorVersion+'<br>'
					 +'navigator.appName = '+navigator.appName+'<br>'
					 +'navigator.userAgent = '+navigator.userAgent+'<br>'
					)*/
					
					browser = browserName;
				}
				
				function Detect_location()
				{
				//	console.log('Detect Location');	
					locate();
						
					function gethttpobject() 
					{
						if(window.ActiveXObject)
						{
							return new ActiveXObject("Microsoft.XMLHTTP");
						}else if(window.XMLHttpRequest)
						{
							return new XMLHttpRequest();
						}else
						{
							return null;
						}
					}
			
					function setoutput()
					{
			
						if (httpobject.readyState == 4)
						{
							var jsonob=JSON.parse(httpobject.responseText);
							//console.log(jsonob);
							city = jsonob.results[0].address_components[6].long_name;
							state = jsonob.results[0].address_components[7].long_name;
							country = jsonob.results[0].address_components[8].long_name;
							//console.log(country + state + city);
							
						}
					}
			
		
					function locate(){
						
						if ("geolocation" in navigator){
							navigator.geolocation.getCurrentPosition(function(position){ 
								var currentLatitude = position.coords.latitude;
								var currentLongitude = position.coords.longitude;
								lattitude = currentLatitude;
								longtitude = currentLongitude;
									//console.log(lattitude);
							//console.log(currentLatitude +  "   " + currentLongitude);
								//return currentLatitude;
							var url ="https://maps.googleapis.com/maps/api/geocode/json?latlng="+currentLatitude+","+currentLongitude+"&sensor=true&key=AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA";
								
									httpobject=gethttpobject();
											
									if(httpobject != null)
									{
									
										httpobject.open("GET",url,true);
										httpobject.send(null);
										httpobject.onreadystatechange=setoutput;
									}
											//var path=""+country+"/"+												
		
							},
						  function(positionError){
							is_declined=true; 
							 	if(is_decliend = true)
								{
									/*function gethttpobject_another() 
									{
										if(window.ActiveXObject)
										{
											return new ActiveXObject("Microsoft.XMLHTTP");
										}else if(window.XMLHttpRequest)
										{
											return new XMLHttpRequest();
										}else
										{
											return null;
										}
									}*/
			
									function setoutput_another()
									{
							
										if (httpobject.readyState == 4)
										{
											//console.log("ready state");
											var jsonob=JSON.parse(httpobject.responseText);
											//console.log(jsonob);
											//console.log(jsonob.city);
											
											country =jsonob.country_name; 
											state = jsonob.state;
											city = jsonob.city;
											
											//console.log(country+state+city);
											
										}
									}
							 
							 	var url ="https://geoip-db.com/json/";
									
									httpobject=gethttpobject();
									
								
										
									if(httpobject != null)
									{
										httpobject.open("GET",url,true);
										httpobject.send(null);
										//console.log(httpobject);
										httpobject.onreadystatechange = setoutput_another;
									}
									//alert("true");
								}
							//console.log("Error: " + positionError.message + "<br />");
						  },
						  {
							enableHighAccuracy: true,
							timeout: 10 * 1000 // 10 seconds
						  });
								}
							}
						
						
					
				}
				
			
				function get_data()
				{
					
						
						Detect_device();
						Detect_os();
						Detect_browser();
						Detect_ip();
						
						
						
						//console.log(device_type);
						//console.log(device_os);
						//console.log(browser);
						//console.log("country is  " + country + "state is  " +state + "city is  " + city);
						//console.log(client_ip);
						//console.log(" Http Reffer  " + http_referrer);
						//document.write("ippp  " + client_ip);
						
						
						function gethttpobject() 
						{
							if(window.ActiveXObject)
							{
								return new ActiveXObject("Microsoft.XMLHTTP");
							}else if(window.XMLHttpRequest)
							{
								return new XMLHttpRequest();
							}else
							{
								return null;
							}
						}
			
						function setoutput()
						{
				
							if (httpobject.readyState == 4)
							{
								//var jsonob=JSON.parse(httpobject.responseText);
								//console.log(httpobject.responseText);
								//document.write(httpobject.responseText);
								//city = jsonob.results[0].address_components[6].long_name;
								//state = jsonob.results[0].address_components[7].long_name;
								//country = jsonob.results[0].address_components[8].long_name;
								//console.log(country + state + city);
								
							}
						}
						
						if(window.location.hostname == 'localhost')
						{
							
							var url ="http://localhost/web_analysis/index.php/user/Userdata_callback/ajax_callback?user_ip="+client_ip+"&user_city="+city+"&user_state="+state+"&user_country="+country+"&user_httpref="+http_referrer+"&device_type="+device_type+"&device_os="+device_os+"&device_browser="+browser+"&site_id="+site_id;
						}
						else
						{
								var url ="http://webanalysis.creativewebinfotech.com/index.php/user/Userdata_callback/ajax_callback?user_ip="+client_ip+"&user_city="+city+"&user_state="+state+"&user_country="+country+"&user_httpref="+http_referrer+"&device_type="+device_type+"&device_os="+device_os+"&device_browser="+browser+"&site_id="+site_id;
						}
					//console.log(url)	
						/*var url ="http://localhost/web_analysis/index.php/user/Userdata_callback/ajax_callback/"+client_ip+"";*/
								
									httpobject=gethttpobject();
											
									if(httpobject != null)
									{
									
										httpobject.open("POST",url,true);
										httpobject.send();
										httpobject.onreadystatechange=setoutput;
									}
						
						
					if(is_declined==true){
						
					}
				}
				setTimeout(function(){	
					get_data();	
				},3000);
}