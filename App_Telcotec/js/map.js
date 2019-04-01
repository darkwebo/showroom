
$(function() {

$('form[name="fichier1"]').find('select[name="file"]').click(function() {
	
			$('form[name="fichier1"]').find('input[name="nom"]')[0].checked=false;
			$('form[name="fichier1"]').find('input[name="nom"]')[1].checked=false;
			
			$('form[name="fichier1"]').find('input[name="drive"]')[0].checked=false;
			$('form[name="fichier1"]').find('input[name="drive"]')[1].checked=false;
			$('form[name="fichier1"]').find('input[name="drive"]')[2].checked=false;
			
		
		
	});




	$('#legend-signal').hide();
	$('#legend-coverage').hide();
	$('form[name="fichier1"]').find('input[name="nom"]').click(function() {
	$('#aze').show();
	$('form[name="fichier1"]').find('input[name="drive"]')[2].disabled=false;
	$('form[name="fichier1"]').find('input[name="drive"]')[1].disabled=false;
	if($(this).val() == 'RxLev') 
	{
	$('form[name="fichier1"]').find('input[name="drive"]')[0].disabled=false;
	//$('form[name="fichier1"]').find('input[name="drive"]')[0].checked=true;
	$('form[name="fichier1"]').find('input[name="drive"]')[2].disabled=true;
	$('#param1').hide();
	$('#param2').hide();
	$('#param3').hide();
	$('#map-canvas').show();
	//$('#legend-map').hide();
	}
	if($(this).val() == 'RxQual') 
	{
	$('form[name="fichier1"]').find('input[name="drive"]')[0].disabled=false;
	//$('form[name="fichier1"]').find('input[name="drive"]')[0].checked=true;
	$('form[name="fichier1"]').find('input[name="drive"]')[1].disabled=true;
	$('#param1').hide();
	$('#param2').hide();
	$('#param3').hide();
	$('#map-canvas').show();
	//$('#legend-map').hide();
	}

	
	});
	$('form[name="fichier1"]').find('input[name="drive"]').click(function() {
	 
	if($(this).val() == 'road') 
	{
	//alert("road");
	$('#param').hide();
	$('#param1').hide();
	$('#param2').hide();
	$('#param3').hide();
	$('#screen').show();
   
	$( "#map" ).animate({
    
    marginLeft: "-0.7in"
	 
  }, 1500 );
	
	
	
	$('#legend-coverage').hide();
	$('#legend-signal').hide();
	$('#map-canvas').show();
	}
	else  if($(this).val() == 'Coverage Evaluation')
	{
	//alert("coverage");
	 var form = $('form[name="fichier1"]');
    var chart = form.find('input[name="nom"]:checked').val();
	//console.log("czcfezcfedc");
	 if(chart == 'RxLev')
	 {
	 //alert("rxlev");
	$('#param1').show();
	$('#param2').hide();
	$('#param3').hide();
	$('#screen').hide();
	$( "#map" ).animate({
    
    marginLeft: "0.7in"
	 
  }, 1500 );
	
	$('#map-canvas').hide();
	$('#legend-coverage').hide();
	$('#legend-signal').hide();
	}
	
	}
	else  if($(this).val() == 'Signal Evaluation')
	{
	
	  //alert("rxpower");
	$('#param1').hide();
	$('#param3').hide();
	$('#param2').show();
	$('#screen').hide();
	$( "#map" ).animate({
   
    marginLeft: "0.7in"
	 
  }, 1500 );
	
	$('#map-canvas').hide();
	$('#legend-coverage').hide();
	$('#legend-signal').hide();
	}
	});
});


function initialize() {

        var coords=[10.18696, 36.82965]
        var myLatlng= new google.maps.LatLng(10.18696, 36.82965);
        var mapOptions = 
		{
          zoom: 3,
		  center:myLatlng,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
		      
				 
				 

       
			$('input#map').click(function() 
				{		
				
							$( "#map" ).animate({
    
    marginLeft: "-0.7in"
	 
  }, 1500 );
			    
           
                       
				 
				$('#screen').show();
				
				
				
				
				 $('#legend-coverage').hide();
				  $('#legend-signal').hide();
							$('#param1').hide();
								 $('#param2').hide();	
                                 $('#param3').hide();									 
								$('#map-canvas').show();
								//$('#legend-map').show();
								var form = $('form[name="fichier1"]');
								 var chart = form.find('input[name="nom"]:checked').val();
								 var drive = form.find('input[name="drive"]:checked').val();
							   if( $('form[name="fichier1"]').find('input[name="drive"]')[1].checked)
										{
												  $('#legend-coverage').show();
												
										}
								else if( $('form[name="fichier1"]').find('input[name="drive"]')[2].checked)
										{
												  $('#legend-signal').show();
												
										}
										
								
								var form = $('form[name="fichier1"]');
								
		                       var bullet = form.find('select[name="bullet"]').val();
								$.post('ajax/map.php', form.serialize(), function(data) 
								{
					
									console.log(data);
					
									var dataSource = JSON.parse(data);
									var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
					
								/*	var marker= new google.maps.Marker
									({
										position: new google.maps.LatLng(dataSource[0].Latitude, dataSource[0].Longitude),
										map:map,
										icon: 'images/bleu1.png',
										title:'The  measurement start' 
									});*/
						
									 
									/*var marker= new google.maps.Marker
									({
										position: new google.maps.LatLng(dataSource[dataSource.length-1].Latitude, dataSource[dataSource.length-1].Longitude),
										map:map,
										icon: 'images/end1.png',
										title:'The end of measurement' 
										});*/
										
										var datas = form.find('input[name^="data"]').serializeArray();
											for(var i=1;i<dataSource.length-1;i++) 
											{
												
					
											 var infoWindow = new google.maps.InfoWindow();
											 //if(dataSource[i].sir>;
											 /*----------------------------------------------------------------------------------*/
											 if(drive=="road")
											 {
											 //////////////////////////////////////debut
											 if(bullet=="32*32 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/32/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/32/boule.png' : (dataSource[i].label == 'Average' ? 'images/32/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/32/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/32/bulle-jaune.png' :'images/32/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/32/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/32/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/32/bullet-rouge.png' : 'images/32/blanche1.png'))),
												title:'' 
												});
												}
											   } 
											   ///////////////////////////////////////////////////////////////
											   if(bullet=="28*28 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/28/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/28/boule.png' : (dataSource[i].label == 'Average' ? 'images/28/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/28/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/28/bulle-jaune.png' :'images/28/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/28/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/28/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/28/bullet-rouge.png' : 'images/28/blanche1.png'))),
												title:'' 
												});
												}
											   } 
											     ///////////////////////////////////////////////////////////////
											   if(bullet=="24*24 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/24/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/24/boule.png' : (dataSource[i].label == 'Average' ? 'images/24/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/24/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/24/bulle-jaune.png' :'images/24/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/24/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/24/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/24/bullet-rouge.png' : 'images/24/blanche1.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////////////////
											   if(bullet=="20*20 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/20/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/20/boule.png' : (dataSource[i].label == 'Average' ? 'images/20/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/20/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/20/bulle-jaune.png' :'images/20/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/20/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/20/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/20/bullet-rouge.png' : 'images/20/blanche1.png'))),
												title:'' 
												});
												}
											   }
											   ///////////////////////////////////////////////////
											   if(bullet=="16*16 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/16/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/16/boule.png' : (dataSource[i].label == 'Average' ? 'images/16/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/16/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/16/bulle-jaune.png' :'images/16/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/16/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/16/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/16/bullet-rouge.png' : 'images/16/blanche1.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if(bullet=="14*14 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/14/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/14/boule.png' : (dataSource[i].label == 'Average' ? 'images/14/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/14/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/14/bulle-jaune.png' :'images/14/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/14/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/14/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/14/bullet-rouge.png' : 'images/14/blanche1.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if(bullet=="12*12 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/12/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/12/boule.png' : (dataSource[i].label == 'Average' ? 'images/12/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/12/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/12/bulle-jaune.png' :'images/12/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/12/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/12/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/12/bullet-rouge.png' : 'images/12/blanche1.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if(bullet=="10*10 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/10/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/10/boule.png' : (dataSource[i].label == 'Average' ? 'images/10/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/10/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/10/bulle-jaune.png' :'images/10/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/10/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/10/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/10/bullet-rouge.png' : 'images/10/blanche1.png'))),
												title:'' 
												});
												}
											   }
											    ///////////////////////////////////////////////////
											   if(bullet=="8*8 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/8/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/8/boule.png' : (dataSource[i].label == 'Average' ? 'images/8/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/8/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/8/bulle-jaune.png' :'images/8/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/8/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/8/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/8/bullet-rouge.png' : 'images/8/blanche1.png'))),
												title:'' 
												});
												}
											   }
											   
											   ///////////////////////////////////////////////////
											   if(bullet=="6*6 pixels")
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/6/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/6/boule.png' : (dataSource[i].label == 'Average' ? 'images/6/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/6/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/6/bulle-jaune.png' :'images/6/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/6/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/6/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/6/bullet-rouge.png' : 'images/6/blanche1.png'))),
												title:'' 
												});
												}
											   }
											   
											 
											 
											 
											 
											 
											 
											 
											 
											 
											 
											 /////////////////////////////////////////fin
											 }
											 
											 
											 
											 
											 
											 
											 
											if((bullet=="32*32 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/32/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/32/boule.png' : (dataSource[i].label == 'Average' ? 'images/32/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/32/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/32/bulle-jaune.png' :'images/32/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/32/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/32/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/32/bullet-rouge.png' : 'images/32/bullet-noir.png'))),
												title:'' 
												});
												}
											   } 
											   ///////////////////////////////////////////////////////////////
											   if((bullet=="28*28 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/28/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/28/boule.png' : (dataSource[i].label == 'Average' ? 'images/28/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/28/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/28/bulle-jaune.png' :'images/28/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/28/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/28/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/28/bullet-rouge.png' : 'images/28/bullet-noir.png'))),
												title:'' 
												});
												}
											   } 
											     ///////////////////////////////////////////////////////////////
											   if((bullet=="24*24 pixels")&&((drive!="road")))
											{	
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/24/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/24/boule.png' : (dataSource[i].label == 'Average' ? 'images/24/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/24/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/24/bulle-jaune.png' :'images/24/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/24/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/24/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/24/bullet-rouge.png' : 'images/24/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////////////////
											   if((bullet=="20*20 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/20/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/20/boule.png' : (dataSource[i].label == 'Average' ? 'images/20/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/20/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/20/bulle-jaune.png' :'images/20/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/20/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/20/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/20/bullet-rouge.png' : 'images/20/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											   ///////////////////////////////////////////////////
											   if((bullet=="16*16 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/16/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/16/boule.png' : (dataSource[i].label == 'Average' ? 'images/16/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/16/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/16/bulle-jaune.png' :'images/16/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/16/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/16/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/16/bullet-rouge.png' : 'images/16/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if((bullet=="14*14 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/14/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/14/boule.png' : (dataSource[i].label == 'Average' ? 'images/14/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/14/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/14/bulle-jaune.png' :'images/14/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/14/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/14/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/14/bullet-rouge.png' : 'images/14/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if((bullet=="12*12 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/12/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/12/boule.png' : (dataSource[i].label == 'Average' ? 'images/12/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/12/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/12/bulle-jaune.png' :'images/12/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/12/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/12/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/12/bullet-rouge.png' : 'images/12/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											      ///////////////////////////////////////////////////
											   if((bullet=="10*10 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/10/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/10/boule.png' : (dataSource[i].label == 'Average' ? 'images/10/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/10/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/10/bulle-jaune.png' :'images/10/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/10/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/10/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/10/bullet-rouge.png' : 'images/10/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											    ///////////////////////////////////////////////////
											   if((bullet=="8*8 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/8/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/8/boule.png' : (dataSource[i].label == 'Average' ? 'images/8/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/8/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/8/bulle-jaune.png' :'images/8/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/8/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/8/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/8/bullet-rouge.png' : 'images/8/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											   
											   ///////////////////////////////////////////////////
											  if((bullet=="6*6 pixels")&&((drive!="road")))
											{
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/6/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/6/boule.png' : (dataSource[i].label == 'Average' ? 'images/6/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/6/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/6/bulle-jaune.png' :'images/6/bullet-noir.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/6/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/6/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/6/bullet-rouge.png' : 'images/6/bullet-noir.png'))),
												title:'' 
												});
												}
											   }
											   
												/*----------------------------------------------------------------------------------*/
												if(chart == 'RxLev')
												{
												(function(i) {
													google.maps.event.addListener(marker, "click", function() {
					                                   if(dataSource[i].RxLev!='')
													   {
													infoWindow.close();
													infoWindow.setContent(
													"<div id='boxcontent' style='font-family:Calibri'><strong style='color:green'>"
													+ "Info:" +
													"</strong><br /><span style='font-size:12px;color:#333'>Longitude:  "+dataSource[i].Latitude +",</span></div> </strong><span style='font-size:12px;color:#333'>Latitude:  "+dataSource[i].Longitude  +",</span></div><br></span></div> </strong><span style='font-size:12px;color:#333'>RxLev Value:  "+dataSource[i].RxLev+".</span></div> "
													);
													infoWindow.open(map, this);
													}
													else if(dataSource[i].RxLev=='')
													   {
													infoWindow.close();
													infoWindow.setContent(
													"<div id='boxcontent' style='font-family:Calibri'><strong style='color:green'>"
													+ "Info:" +
													"</strong><br /><span style='font-size:12px;color:#333'>Longitude:  "+dataSource[i].Latitude +",</span></div> </strong><span style='font-size:12px;color:#333'>Latitude:  "+dataSource[i].Longitude  +",</span></div><br></span></div> </strong><span style='font-size:12px;color:#333'>RxLev Value:  Undefined Value.</span></div>"
													);
													infoWindow.open(map, this);
													} 
													
													});
													
													})(i);
												//
												}
												//
												if(chart== 'RxQual')
												{
												(function(i) {
													google.maps.event.addListener(marker, "click", function() {
					                                   if(dataSource[i].RxQual!='')
													   {
													infoWindow.close();
													infoWindow.setContent(
													"<div id='boxcontent' style='font-family:Calibri'><strong style='color:green'>"
													+ "Info:" +
													"</strong><br /><span style='font-size:12px;color:#333'>Longitude:  "+dataSource[i].Latitude +",</span></div> </strong><span style='font-size:12px;color:#333'>Latitude:  "+dataSource[i].Longitude  +",</span></div><br></span></div> </strong><span style='font-size:12px;color:#333'>RxQual Value:  "+dataSource[i].RxQual+".</span></div> "
													);
													infoWindow.open(map, this);
													}
													else if(dataSource[i].RxLev!='')
													   {
													   	infoWindow.close();
													infoWindow.setContent(
													"<div id='boxcontent' style='font-family:Calibri'><strong style='color:green'>"
													+ "Info:" +
													"</strong><br /><span style='font-size:12px;color:#333'>Longitude:  "+dataSource[i].Latitude +",</span></div> </strong><span style='font-size:12px;color:#333'>Latitude:  "+dataSource[i].Longitude  +",</span></div><br></span></div> </strong><span style='font-size:12px;color:#333'>RxQual Value: Undefined Value.</span></div> "
													);
													infoWindow.open(map, this);
													   
													   
													   }
													});
													})(i);
												//
												}
												
											     //
											}
					
									});
						});
		}