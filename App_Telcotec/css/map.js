
$(function() {

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
    
    marginLeft: "-0.9in"
	 
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
    
    marginLeft: "0.3in"
	 
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
   
    marginLeft: "0.3in"
	 
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
    
    marginLeft: "-0.9in"
	 
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
							   if( $('form[name="fichier1"]').find('input[name="drive"]')[1].checked)
										{
												  $('#legend-coverage').show();
												
										}
								else if( $('form[name="fichier1"]').find('input[name="drive"]')[2].checked)
										{
												  $('#legend-signal').show();
												
										}
								
								var form = $('form[name="fichier1"]');
								$.post('ajax/map.php', form.serialize(), function(data) 
								{
					
									console.log(data);
					
									var dataSource = JSON.parse(data);
									var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
					
									var marker= new google.maps.Marker
									({
										position: new google.maps.LatLng(dataSource[0].Latitude, dataSource[0].Longitude),
										map:map,
										icon: 'images/bleu1.png',
										title:'The  measurement start' 
									});
						
									 
									var marker= new google.maps.Marker
									({
										position: new google.maps.LatLng(dataSource[dataSource.length-1].Latitude, dataSource[dataSource.length-1].Longitude),
										map:map,
										icon: 'images/end1.png',
										title:'The end of measurement' 
										});
										
										var datas = form.find('input[name^="data"]').serializeArray();
											for(var i=1;i<dataSource.length-1;i++) 
											{
												
					
											 var infoWindow = new google.maps.InfoWindow();
											 //if(dataSource[i].sir>;
											if(chart == 'RxLev')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/boule.png' : (dataSource[i].label == 'Average' ? 'images/bullet-violet.png' : (dataSource[i].label == 'bad' ? 'images/bullet-rouge.png' : (dataSource[i].label == 'verybad' ? 'images/bulle-jaune.png' :'images/blanche1.png'))))),
												title:'' 
												});
												}
												if(chart == 'RxQual')
												{
											var marker= new google.maps.Marker
												({
												position: new google.maps.LatLng(dataSource[i].Latitude, dataSource[i].Longitude),
												map:map,
												icon: (dataSource[i].label == 'VeryGood' ? 'images/bullet-verte.png' : ( dataSource[i].label == 'Good' ? 'images/bulle-jaune.png' : (dataSource[i].label == 'Fair' ? 'images/bullet-rouge.png' : 'images/blanche1.png'))),
												title:'' 
												});
												}
											    
												//
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