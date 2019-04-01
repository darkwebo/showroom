

/*-------------------partie analyse omc-------------*/
$(function () {
	
	$('form[name="fichier-omc"]').find('input[name="Parameters"]').click(function() {
	 if($(this).val() == 'Choice of indicators')
	 {
	 $('#chartContaineromc').hide();
	 $('#div-graph').hide();
	 $('#div-date').hide();
	$('#div-kpi').show();
	 }
	 else if($(this).val() == 'Date selection'){
	 $('#chartContaineromc').hide();
	 $('#div-graph').hide();
	 $('#div-kpi').hide();
	 $('#div-date').show();
	 }
	  else if($(this).val() == 'Choice of graph type'){
	  $('#chartContaineromc').hide();
	   $('#div-date').hide();
	   $('#div-kpi').hide();
	  $('#div-graph').show();
	 }
	  
			
	});

});


/*-------------------verifier-checkbox && bouton radio--------------------*/
$(function(){
$("input.option").change(function()
{
limit=4;
nb=$("input.option:checked").length;
if(nb>limit)
{
$(this).attr("checked",false);
alert("you can to select 4 KPIs as limit !!!");
}

var form = $('form[name="fichier-omc"]');

if(nb==1)
{
form.find('input[name="new1"]')[2].disabled=true;
form.find('input[name="new1"]')[3].disabled=true;

}
else if(nb==2)
{
form.find('input[name="new1"]')[3].disabled=false;
form.find('input[name="new1"]')[2].disabled=true;

}
else
{
form.find('input[name="new1"]')[2].disabled=false;
}
});

/*---------partie statistique---------------*/
//recuperer la liste de date
 $('select[name="heure1"]').click(function() {
	  var index=this.selectedIndex;
	  var taille= $(this).find('option').length;
	  $('select[name="heure2"]').find('option').remove();
	  for(var i=index+1; i<taille;i++)
	  {
	  $('select[name="heure2"]').append('<option value="'+this.options[i].value+'">'+this.options[i].text+'</option>');
	  
	  
	  }
		
	});


$('input#bouton-omc').click(function() {



   $('select[name="heure1"]').click(function() {
	  var index=this.selectedIndex;
	  var taille= $(this).find('option').length;
	  $('select[name="heure2"]').find('option').remove();
	  for(var i=index+1; i<taille;i++)
	  {
	  $('select[name="heure2"]').append('<option value="'+this.options[i].value+'">'+this.options[i].text+'</option>');
	  
	  
	  }
		
	});
	
	
	
	

    var form = $('form[name="fichier-omc"]');
	//var index =form.find('select[name="heure1"]').selectedIndex;
	//console.log(index);
	
	var index1=$(".index1 option:selected").prevAll().size();
	var index2=$(".index2 option:selected").prevAll().size();
	console.log(index1);
	console.log(index2);
//recuperer la liste des date
var tab2=[];
$(".index1 option").each(function()
{
tab2.push($(this).val());
});
if(index1==0)
{
var tab3=[];
var k=0;
for (var j=index1;j<=index2+1;j++)
{
tab3[k]=tab2[j];
k++;

}
}
else if(index1!=0)
{
var somme=index1+index2+1;

//console.log(somme);
var tab3=[];
var k=0;
for (var j=index1;j<=somme;j++)
{
tab3[k]=tab2[j];
k++;

}
}
console.log(tab3);

	
	
	
	$('#div-graph').hide();
	 $('#div-date').hide();
	 $('#div-kpi').hide();
     
	 form.find('input[name="Parameters"]')[0].checked=false;
	  form.find('input[name="Parameters"]')[1].checked=false;
	   form.find('input[name="Parameters"]')[2].checked=false;
	  /*------partie line bar----------*/ 
	  
	  
	  
	  
//recuperer la liste des KPI
	   var i = 0; 
var tab=[];
$("input.option:checked").each(function(){ 
 tab[i] = $(this).val(); 
 i++; 
});

$.post('ajax/omc.php', form.serialize(), function(data) {
		
			console.log(data);

			var dataSource = JSON.parse(data);
			for(var i=0;i<dataSource[tab[0]].length;i++) {
				for(var j=0;j<tab.length;j++) {
					dataSource[tab[j]][i] = dataSource[tab[j]][i].replace(",", ".");
					dataSource[tab[j]][i] = parseFloat(dataSource[tab[j]][i]);
				}
			}
			console.log(tab[0]);
	   console.log(dataSource[tab[0]][0]);
	   
	   
	   if( $('form[name="fichier-omc"]').find('input[name="new1"]')[0].checked)
	   {
			if(nb==1)
			{
			console.log("premier");
			$('#chartContaineromc').show();
	          $(function () {
        $('#chartContaineromc').highcharts({
            title: {
                text: 'Omc Statistic',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories:  tab3
                ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Number'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            series: [{
                name: tab[0],
                data: dataSource[tab[0]]
            }]
        });
    });
    

	   
			}
			else if(nb==2)
			{
			$('#chartContaineromc').show();
				         $(function () {
        $('#chartContaineromc').highcharts({
            title: {
                text: 'Omc Statistic',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
           xAxis: {
                categories: tab3,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Number'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            series: [{
                name: tab[0],
                data: dataSource[tab[0]]
            }, {
                name: tab[1],
                data: dataSource[tab[1]]
            }]
        });
    });
    
        
	   
			}
			else if(nb==3)
			{
			$('#chartContaineromc').show();
				        $(function () {
        $('#chartContaineromc').highcharts({
            title: {
                text: 'Omc Statistic',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: tab3,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Number'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            series: [{
                name: tab[0],
                data:dataSource[tab[0]]
            }, {
                name: tab[1],
                data: dataSource[tab[1]]
            }, {
                name: tab[2],
                data: dataSource[tab[2]]
            }]
        });
    });
    
    

	   
			}
			else if(nb==4)
			{
			$('#chartContaineromc').show();
	                  
					/*  $(function () {
         $('#chartContaineromc').highcharts({
            chart: {
                type: 'column',
                margin: [ 50, 50, 100, 80]
            },
            title: {
                text: 'World\'s largest cities per 2008'
            },
            xAxis: {
                categories: [
                    'Tokyo',
                    'Jakarta',
                    'New York',
                    'Seoul',
                    'Manila',
                    'Mumbai',
                    'Sao Paulo',
                    'Mexico City',
                    'Dehli',
                    'Osaka',
                    'Cairo',
                    'Kolkata',
                    'Los Angeles',
                    'Shanghai',
                    'Moscow',
                    'Beijing',
                    'Buenos Aires',
                    'Guangzhou',
                    'Shenzhen',
                    'Istanbul'
                ],
                labels: {
                    rotation: -45,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>',
            },
            series: [{
                name: 'Population',
                data: [34.4, 21.8, 20.1, 20, 19.6, 19.5, 19.1, 18.4, 18,
                    17.3, 16.8, 15, 14.7, 14.5, 13.3, 12.8, 12.4, 11.8,
                    11.7, 11.2],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    x: 4,
                    y: 10,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif',
                        textShadow: '0 0 3px black'
                    }
                }
            }]
        });
    });*/
    
$(function () {
        $('#chartContaineromc').highcharts({
            title: {
                text: 'Omc Statistic',
                x: -20 
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: tab3,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Number'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            series: [{
                name: tab[0],
                data: dataSource[tab[0]]
            }, {
                name: tab[1],
               data:dataSource[tab[1]]
            }, {
                name: tab[2],
                data:dataSource[tab[2]]
            }, {
                name: tab[3],
                data:dataSource[tab[3]]
            }]
        });
    });
    
    
	   
				}
	   
	   }
	   /*-------fin partie line bar--------*/
	   
	   /*------partie stack bar----------*/ 
	   if( $('form[name="fichier-omc"]').find('input[name="new1"]')[1].checked)
	   {
	   
		   if(nb==1)
		   {
		   $('#chartContaineromc').show();
		     $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            yAxis: {
                min: 0,
                title: {
                    text: 'Value'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
                name: tab[0],
                data: dataSource[tab[0]]
            }]
			});
			});
    
		   
		   }
			else if(nb==2)
		   {
		   $('#chartContaineromc').show();
				$(function () {
				$('#chartContaineromc').highcharts({
				chart: {
                type: 'column'
				},
				title: {
                 text: 'OMC Statistic'
				},
				xAxis: {
                categories: tab3
				,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
				},
				yAxis: {
                min: 0,
                title: {
                    text: 'Value'
                }
				},
				legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
				},
				plotOptions: {
                series: {
                    stacking: 'normal'
                }
				},
                series: [{
                name: tab[0],
                data: dataSource[tab[0]]
				}, {
                name: tab[1],
                data: dataSource[tab[1]]
				}]
				});
				});
    
		   
		   }
			 else if(nb==3)
		   {
		   $('#chartContaineromc').show();
				$(function () {
				$('#chartContaineromc').highcharts({
				chart: {
                type: 'column'
				},
				title: {
                 text: 'OMC Statistic'
				},
				xAxis: {
                categories: tab3
				,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
				yAxis: {
                min: 0,
                title: {
                    text: 'Value'
                }
				},
				legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
				},
				plotOptions: {
                series: {
                    stacking: 'normal'
                }
				},
                series: [{
                name: tab[0],
                data: dataSource[tab[0]]
				}, {
                name: tab[1],
                data: dataSource[tab[1]]
				}, {
                name: tab[2],
                data: dataSource[tab[2]]
				}]
				});
				});
    
		   
		   }
			 else if(nb==4)
		   {
		   $('#chartContaineromc').show();
		       $(function () {
				$('#chartContaineromc').highcharts({
				chart: {
                type: 'column'
				},
				title: {
                 text: 'OMC Statistic'
				},
				xAxis: {
                categories: tab3
				,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
				yAxis: {
                min: 0,
                title: {
                    text: 'Value'
                }
				},
				legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
				},
				plotOptions: {
                series: {
                    stacking: 'normal'
                }
				},
                series: [{
                name: tab[0],
                data: dataSource[tab[0]]
				}, {
                name: tab[1],
                data: dataSource[tab[1]]
				}, {
                name: tab[2],
                data: dataSource[tab[2]]
				}, {
                name: tab[3],
                data: dataSource[tab[3]]
				}]
				});
				});
    
		   
				}
			
	   }
	   /*-------fin partie stack bar--------*/
	   
	   
	    /*------partie clustered bar----------*/ 
	   if( $('form[name="fichier-omc"]').find('input[name="new1"]')[2].checked)
	   {
	   
	   if(nb==3)
	   {
	   $('#chartContaineromc').show();
	      $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
            },
            title: {
                text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            tooltip: {
                formatter: function() {
                    var s;
                    if (this.point.name) { // the pie chart
                        s = ''+
                            this.point.name +': '+ this.y ;
                    } else {
                        s = ''+
                            this.x  +': '+ this.y;
                    }
                    return s;
                }
            },
           
            series: [{
                type: 'column',
                name: tab[0],
                data: dataSource[tab[0]]
            }, {
                type: 'column',
                name: tab[1],
                data: dataSource[tab[1]]
            },  {
                type: 'spline',
                name: tab[2],
				   data: dataSource[tab[2]],
				marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'orange'
                },
             
            }]
			});
			});
	   
	   }
	   else if(nb==4)
	   {
	   $('#chartContaineromc').show();
	       $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
            },
            title: {
                text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            tooltip: {
                formatter: function() {
                    var s;
                    if (this.point.name) { // the pie chart
                        s = ''+
                            this.point.name +': '+ this.y +' fruits';
                    } else {
                        s = ''+
                            this.x  +': '+ this.y;
                    }
                    return s;
                }
            },
           
            series: [{
                type: 'column',
                name: tab[0],
                data: dataSource[tab[0]]
                
            }, {
                type: 'column',
                name: tab[1],
                data: dataSource[tab[1]]
            }, {
                type: 'column',
                name: tab[2],
                data: dataSource[tab[2]]
            }, {
                type: 'spline',
                name: tab[3],
                data: dataSource[tab[3]],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'orange'
                }
            }]
			});
			});
    
	   
	   } 
	   }
	   /*-------fin partie clustered bar--------*/
	   
	   
	   	    /*------partie combined bar----------*/ 
	   if( $('form[name="fichier-omc"]').find('input[name="new1"]')[3].checked)
	   {
	   $('#chartContaineromc').show();
		   if(nb==2)
		   {
		       $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            yAxis: {
                min: 0,
                title: {
                     text: 'Value'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
                name: tab[0],
                data: dataSource[tab[0]]
            },  {
                type: 'spline',
                name: tab[1],
                data: dataSource[tab[1]],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'orange'
                }
            }]
			});
			});
    
		   
		   }
		   else if(nb==3)
		   {
		   $('#chartContaineromc').show();
		       $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
                
            },
            title: {
                 text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            yAxis: {
                min: 0,
                title: {
                     text: 'Value'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
				 type: 'column',
                name: tab[0],
                data: dataSource[tab[0]]
            }, {
				 type: 'column',
                name: tab[1],
                data: dataSource[tab[1]]
            },  {
                type: 'spline',
                name: tab[2],
                data: dataSource[tab[2]],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'orange'
                }
            }]
			});
			});
    
		   
		   }
		   else if(nb==4)
		   {
		   $('#chartContaineromc').show();
		     $(function () {
			$('#chartContaineromc').highcharts({
            chart: {
                
            },
            title: {
                text: 'OMC Statistic'
            },
            xAxis: {
                categories: tab3
            ,
                labels: {
                    rotation: -59,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }},
            yAxis: {
                min: 0,
                title: {
                    text: 'Value'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
				 type: 'column',
                name: tab[0],
                data: dataSource[tab[0]]
            }, {
			type: 'column',
                name: tab[1],
                data: dataSource[tab[1]]
            }, {
			  type: 'column',
                name: tab[2],
                data: dataSource[tab[2]]
            },  {
                type: 'spline',
                name: tab[3],
                data: dataSource[tab[3]],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'orange'
                }
            }]
			});
			});
		   
		   }
	   
	   }
	   /*-------fin partie combined bar--------*/
	   

















});//find'appel ajax


});/*fin action bouton*/


});/*fin de la fonction*/


(function($){


var container = $("#demo"),
    _sentenceEndExp = /(\.|\?|!)$/g; //regular expression to sense punctuation that indicates the end of a sentence so that we can adjust timing accordingly

//this function just takes a string of text and splits it into an array based on the maximum length that should be allowed to exist in each line, and when it encounters the end of a sentence (ending in ".", "?", or "!"), it will force a line break too.
function buildChunks(text, maxLength) {
  if (maxLength === undefined) {
    return text.split(" ");
  }
  var words = text.split(" "),
      wordCount = words.length,
      chunk = [],
      chunks = [], i;
  for (i = 0; i < wordCount; i++){
    chunk.push(words[i]);
    if (_sentenceEndExp.test(words[i]) || i === wordCount - 1 || chunk.join(" ").length + words[i+1].length > maxLength) {
      chunks.push(chunk.join(" "));
      chunk = [];
    }
  }
  return chunks;
}

function machineGun(chunks, maxLength) {
  //in case "chunks" isn't an array, we'll build chunks automatically
  if (!(chunks instanceof Array)) {
    chunks = buildChunks(chunks, maxLength);
  }
  
  var tl = new TimelineMax({delay:1, repeat:100000, repeatDelay:2}),
      time = 0,
      chunk, element, duration, isSentenceEnd, i;
  
  for (i = 0; i < chunks.length; i++) {
    chunk = chunks[i];
    isSentenceEnd = _sentenceEndExp.test(chunk) || (i === chunks.length - 1);
    element = $("<h3>" + chunk + "</h3>").appendTo(container);
      duration = Math.max(0.5, chunk.length * 0.08); //longer words take longer to read, so adjust timing. Minimum of 0.5 seconds.
      if (isSentenceEnd) {
        duration += 0.6; //if it's the last word in a sentence, drag out the timing a bit for a dramatic pause.
      }
      //set opacity and scale to 0 initially. We set z to 0.01 just to kick in 3D rendering in the browser which makes things render a bit more smoothly.
    TweenLite.set(element, {autoAlpha:0, scale:0, z:0.01});
    //the SlowMo ease is like an easeOutIn but it's configurable in terms of strength and how long the slope is linear. See http://www.greensock.com/v12/#slowmo and http://api.greensock.com/js/com/greensock/easing/SlowMo.html
    tl.to(element, duration, {scale:1.2,  ease:SlowMo.ease.config(0.25, 0.9)}, time)
      //notice the 3rd parameter of the SlowMo config is true in the following tween - that causes it to yoyo, meaning opacity (autoAlpha) will go up to 1 during the tween, and then back down to 0 at the end. 
		 	  .to(element, duration, {autoAlpha:1, ease:SlowMo.ease.config(0.25, 0.9, true)}, time);
      time += duration - 0.05;
      if (isSentenceEnd) {
        time += 0.6; //at the end of a sentence, add a pause for dramatic effect.
      }
    }
}

machineGun("OMC        Opearation         and            Maintenace       Center           KPI               Key       Performance     Indicator    BSC        Cell          Calls     TCH_Call_Drop                  SDCCH_drop         Call_success        Drop_Radio       Drop_HO       Accept_release        Congestion       Drop_BSS_RTC           RTCH_Drop           Assign_Unsucc", 12);

})(jQuery);


(function($){

var element = $('.title');
var $p=element.find('p');
$p.html($p.text().replace(/(\w)/g, "<span>$&</span>"));
var t1= new TimelineLite();
t1.staggerFrom(element.find('p span'),0.19,{autoAlpha:0,rotation:90},0.2);

})(jQuery);



	




