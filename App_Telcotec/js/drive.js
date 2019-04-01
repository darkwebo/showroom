
$(function () {



	$('form[name="fichier"]').find('select[name="kpi"]').change(function() {
	
	  $('.div_SIR').hide();
			$('.div_BLER').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			$('form[name="fichier"]').find('input[name="drive"]')[0].checked=true;
			
		
	});
	
	$('form[name="fichier"]').find('input[name="chart"]').click(function() {
		
		if($(this).val() == 'live') {
		var form = $('form[name="fichier"]');
	$('form[name="fichier"]').find('input[name="drive"]')[0].checked=true;
		   $('.div_SIR').hide();
			$('.div_BLER').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
	
		
		}
		
		});
		
/*-------------------verifier-checkbox && bouton radio--------------------*/
//$(function(){
$("input.option").change(function()
{
limit=6;
nb=$("input.option:checked").length;

//recuperer la liste de chekedbox coché	  
//var i = 0; 
//var tab=[];
//$("input.option:checked").each(function(){ 
// tab[i] = $(this).val(); 
// i++; 
//});
//console.log(tab);


if(nb>limit)
{
$(this).attr("checked",false);
alert("You can  select 6 files as limit !!!");
}

});

//});
/*---------------------------------------------*/
		
/*gestion dela partie type d'analyse*/
 $('form[name="fichier"]').find('input[name="type-analyse"]').click(function() {
 var form = $('form[name="fichier"]');
 var chart = form.find('input[name="chart"]:checked').val();
 if($(this).val() == 'Single-file') {
 $("#chartContainerBar").hide();
$("#chartContainerPie").hide();
$("#chartContainerMulti").hide();
 $('.div_SIR').hide();
			$('.div_BLER').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
 $('#ali fieldset ol span li').show(); 
 $('#ali fieldset ul span li').hide(); 
 form.find('input[name="chart"]')[0].disabled=false;
form.find('input[name="chart"]')[1].disabled=false;
 
 }
 else if($(this).val() == 'Multi-file')
 {
 $("#chartContainerBar").hide();
 $("#chartContainerPie").hide();
 $("#chartContainerMulti").hide();
 $('#ali fieldset ol span li').hide(); 
 $('#ali fieldset ul span li').show(); 
  $('.div_SIR').hide();
			$('.div_BLER').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
 form.find('input[name="chart"]')[0].disabled=true;
form.find('input[name="chart"]')[1].disabled=true;
 }
 });


	
	$('form[name="fichier"]').find('input[name="drive"]').click(function() {
		$('.div_kpi').hide();
		if($(this).val() == 'new') {
		var form = $('form[name="fichier"]');
		var kpi = form.find('select[name="kpi"]').val();
		
		
		
		
		
			if(kpi=="SIR")
			{
			
			$('.div_SIR').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			
			}
			if(kpi=="BLER")
			{
			
			$('.div_BLER').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			
			}
			if(kpi=="Rx Power")
			{
			
			$('.div_Power').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			
			}
			if(kpi=="Best EcIo")
			{
			
			$('.div_EcIo').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			
			}
			if(kpi=="Best RSCP")
			{
			
			$('.div_RSCP').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			}	
			if(kpi=="RxLev")
			{
			
			$('.div_RxLev').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			}
			if(kpi=="RxQual")
			{
			$('.div_RxQaul').show();
			$("#chartContainerBar").hide();
			$("#chartContainerPie").hide();
			$("#chartContainerMulti").hide();
			}	
		}
	});
	
	
	
		
	
	
	
	$('input#button').click(function() {
		var form = $('form[name="fichier"]');
		var file = form.find('select[name="name"]').val();
		var kpi = form.find('select[name="kpi"]').val();
		var analyse =form.find('input[name="type-analyse"]:checked').val();
		var drive = form.find('input[name="drive"]:checked').val();
		var chart = form.find('input[name="chart"]:checked').val();
		if(kpi=="SIR")
			{
			$('.div_SIR').hide();
			$('.div_BLER').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="BLER")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="Rx Power")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="Best EcIo")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="Best RSCP")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="RxQual")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(kpi=="RxLev")
			{
			$('.div_BLER').hide();
			$('.div_SIR').hide();
			$('.div_Power').hide();
			$('.div_EcIo').hide();
			$('.div_RSCP').hide();
			$('.div_RxLev').hide();
			$('.div_RxQaul').hide();
			}
			if(analyse=="Single-file")//single analyse
	        {
			
		$('.div_'+$('form[name="fichier"]').find('select[name="kpi"]').val()).hide();
		
		$.post('ajax/drive.php', form.serialize(), function(data) {
		
			console.log(chart+' '+data);

			var dataSource = JSON.parse(data);
			//var dataSource = JSON(data);
			
			$("#chartContainerPie").hide();
			
				for(var i=0;i<dataSource[0].length;i++) {
					dataSource[0][i].value = parseFloat(dataSource[0][i].value);
				}
				
				//console.log(dataSource[0]);
				//console.log(dataSource[0].index);
				//console.log(dataSource[0].value);
	
	
	if((chart == 'bar')&& (kpi=="SIR")) {
	
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
	//
	//calcule pourcentage
	var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value);
	//var sir1=((parseInt(dataSource[0].value)/somme)*100);
	//var sir2=((parseInt(dataSource[1].value)/somme)*100);
	////var sir3=((parseInt(dataSource[2].value)/somme)*100);
	//console.log(sir1);
	//console.log(sir2);
	//console.log(sir3);
	//////			
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Good', 'Fair', 'Poor'],
            name = 'SIR',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Good ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Fair ',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Poor ',
                        
                        color: colors[2]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'SIR Statistic'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%' ;
                        }
                    }
                }
            },
            tooltip: {
                formatter: function() {
				
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
			
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			} 
			
//debut rxlev//
		if((chart == 'bar')&& (kpi=="RxLev")) {
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
		var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value)+parseInt(dataSource[3].value)+parseInt(dataSource[4].value);
				
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Excelent Coverage ','Good Coverage', 'Average Coverage', 'Bad Coverage','No Coverage'],
            name = 'Rxlev',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Excelent Coverage ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Good Coverage ',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Average Coverage ',
                        
                        color: colors[2]
                    }
                }, {
                    y: parseInt(dataSource[3].value)/somme*100,
                    color: colors[3],
                    drilldown: {
                        name: 'Bad  Coverage ',
                        
                        color: colors[3]
                    }
                }, {
                    y: parseInt(dataSource[4].value)/somme*100,
                    color: colors[4],
                    drilldown: {
                        name: 'No Coverage ',
                        
                        color: colors[4]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'RxLev Statistic'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                  /*  if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
			
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}
//fin-rxlev

//debut-rxqual
	if((chart == 'bar')&& (kpi=="RxQual")) {
	
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
	var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value)+parseInt(dataSource[3].value);		
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Excelent Signal','Good Signal', 'Average Signal', 'Bad Signal'],
            name = 'RxQual',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Excelent Signal ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Good Signal ',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Average Signal ',
                        
                        color: colors[2]
                    }
					}
					, {
                    y: parseInt(dataSource[3].value)/somme*100,
                    color: colors[3],
                    drilldown: {
                        name: 'Bad Signal ',
                        
                        color: colors[3]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'RxQual Statistic'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
			
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}
//fin-rxqual
		if((chart == 'bar')&& (kpi=="Rx Power")) {
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
				/*---------test-------------*/
			var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value)+parseInt(dataSource[3].value);
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Good Coverage', 'Average Coverage', 'Low Coverage','No Coverage'],
            name = 'Rx Power',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Good Coverage ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Average Coverage',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Low Coverage',
                        
                        color: colors[2]
                    }
                },
				{
                    y: parseInt(dataSource[3].value)/somme*100,
                    color: colors[3],
                    drilldown: {
                        name: 'No Coverage',
                        
                        color: colors[3]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Rx Power Statistis'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                                /*if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
			tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}

		
		if((chart == 'bar')&& (kpi=="BLER")) {
				
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
				/*---------test-------------*/
			var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value)+parseInt(dataSource[3].value)+parseInt(dataSource[4].value);
			//console.log( parseInt(dataSource[0].value));
			//console.log( parseInt(dataSource[1].value));
			//console.log( parseInt(dataSource[2].value));
			//console.log( parseInt(dataSource[3].value));
			//console.log( parseInt(dataSource[4].value));
			//console.log(somme);
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Excellent', 'Good', 'Average','Bad','Very Bad'],
            name = 'BLER',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Excellent ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Good',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Average',
                        
                        color: colors[2]
                    }
                },
				{
                    y: parseInt(dataSource[3].value)/somme*100,
                    color: colors[3],
                    drilldown: {
                        name: 'Bad',
                        
                        color: colors[3]
                    }
                },{
                    y: parseInt(dataSource[4].value)/somme*100,
                    color: colors[4],
                    drilldown: {
                        name: 'Very Bad',
                        
                        color: colors[4]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'BLER Statistis'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
			tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}
			
			
			
			
			
		if((chart == 'bar')&& (kpi=="Best EcIo")) {
				
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
				/*---------test-------------*/
		var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value);	
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Good ', 'Fair', 'Poor'],
            name = 'Best EcIo',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Good ',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Fair',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Poor',
                        
                        color: colors[2]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Best EcIo Statistis'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
			tooltip: {
                formatter: function() {
                    var point = this.point,
                         s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}
			
			
			
			
			
			
		if((chart == 'bar')&& (kpi=="Best RSCP")) {
				
				$("#chartContainerLive").hide();
				$("#chartContainerPie").hide();
				$("#chartContainerBar").show();
				/*---------test-------------*/
				var somme= parseInt(dataSource[0].value)+parseInt(dataSource[1].value)+parseInt(dataSource[2].value);
		$(function () {		
        var colors = Highcharts.getOptions().colors,
            categories = ['Good', 'Fair', 'Poor'],
            name = 'Best RSCP',
            data = [{
                    y: parseInt(dataSource[0].value)/somme*100,
                    color: colors[0],
                    drilldown: {
                        name: 'Good',
                       
                        color: colors[0]
                    }
                }, {
                    y: parseInt(dataSource[1].value)/somme*100,
                    color: colors[1],
                    drilldown: {
                        name: 'Fair',
                        
                        color: colors[1]
                    }
                }, {
                    y: parseInt(dataSource[2].value)/somme*100,
                    color: colors[2],
                    drilldown: {
                        name: 'Poor',
                        
                        color: colors[2]
                    }
                }];
    
        function setChart(name, categories, data, color) {
			chart.xAxis[0].setCategories(categories, false);
			chart.series[0].remove(false);
			chart.addSeries({
				name: name,
				data: data,
				color: color || 'white'
			}, false);
			chart.redraw();
        }
    
        var chart = $('#chartContainerBar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Best RSCP Statistis'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    text: 'Percent'
                }
            },
            plotOptions: {
                column: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                var drilldown = this.drilldown;
                               /* if (drilldown) { // drill down
                                    setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                } else { // restore
                                    setChart(name, categories, data);
                                }*/
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        color: colors[0],
                        style: {
                            fontWeight: 'bold'
                        },
                        formatter: function() {
                            return this.y.toFixed(2)+'%';
                        }
                    }
                }
            },
			tooltip: {
                formatter: function() {
                    var point = this.point,
                        s = this.x +':<b>'+ (this.y.toFixed(2)) +'% </b><br/>';
                   /* if (point.drilldown) {
                        s += 'Click to view '+ point.category +' versions';
                    } else {
                        s += 'Click to return to browser brands';
                    }*/
                    return s;
                }
            },
            series: [{
                name: name,
                data: data,
                color: 'orange'
            }],
			
            exporting: {
                enabled: true
            }
        })
        .highcharts(); // return chart
   });
					
			}
		
		
		
/**********partie Pie chart*****************/		
				 if((chart == 'pie')&& (kpi=="RxQual")) {
			   $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic RxQual'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               
                {
                    name: 'Excelent Signal',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Good Signal',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Average Signal',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Bad Signal',
                    y:parseInt(dataSource[3].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}	
	//fin rxqual		
			 if((chart == 'pie')&& (kpi=="RxLev")) {
			   $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic RxLev'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               {
                    name: 'Excelent Coverage',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
                {
                    name: 'Good Coverage',
                    y:parseInt(dataSource[01].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Average Coverage',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Bad Coverage',
                    y:parseInt(dataSource[3].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'No Coverage',
                    y:parseInt(dataSource[4].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}		
//fin rxlev			
			 if((chart == 'pie')&& (kpi=="SIR")) {
			   $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic SIR'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               
                {
                    name: 'Good',
					color:'red',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Fair',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Poor',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}
	

if((chart == 'pie')&& (kpi=="BLER")) {
			    $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic BLER'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
			{
                    name: 'Excelent',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Good',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
               
                {
                    name: 'Average',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Bad',
                    y:parseInt(dataSource[3].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Very Bad',
                    y:parseInt(dataSource[4].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}
	

if((chart == 'pie')&& (kpi=="Rx Power")) {
			    $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic Rx Power'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               
                {
                    name: 'Good Coverage',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Average Coverage',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Low Coverage',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'No Coverage',
                    y:parseInt(dataSource[3].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}
	


if((chart == 'pie')&& (kpi=="Best EcIo")) {
			    $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic Best EcIo'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               
                {
                    name: 'Good',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Fair',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Poor',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							
}
	



if((chart == 'pie')&& (kpi=="Best RSCP")) {
			   $("#chartContainerBar").hide();
			   $("#chartContainerLive").hide();
				$("#chartContainerPie").show();
				$(function () {
    $('#chartContainerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Statistic Best RSCP'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                },
                    showInLegend: true

            }
        },
        series: [{
            type: 'pie',
            name: 'Percent',
            data: [
               
                {
                    name: 'Good',
                    y:parseInt(dataSource[0].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Fair',
                    y:parseInt(dataSource[1].value) ,
                    sliced: true,
                    selected: true
                },
				{
                    name: 'Poor',
                    y:parseInt(dataSource[2].value) ,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
});

				
							

}
});//fin de l'appel ajax
}//fin de single analyse



 else if(analyse=="Multi-file"){
 
 var i = 0; 
var tab=[];
$("input.option:checked").each(function(){ 
 tab[i] = $(this).val(); 
 i++; 
});
$("#chartContainerMulti").hide();
$.post('ajax/multi-file.php', form.serialize(), function(data) {
//var t=[];
//t=data;
//console.log(t);

			var dataSource = JSON.parse(data);
			//console.log(dataSource);
			
			
//RxLev-Multi-analyse
if((nb==2)&&(kpi=="RxLev"))
{

$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxLev'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                 headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent Cocerage',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            },{
                name: 'Good Coverage',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100]
    
            }, {
                name: 'Bad Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100]
    
            }
			]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="RxLev"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxLev'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent Coverage',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100]
    
            },{
                name: 'Good Coverage ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100]
    
            }, {
                name: 'Bad Coverage ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100]
    
            },{
                name: 'No coverage',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100]
    
            }
			]
        });
    });
    


}

else if((nb==4)&&(kpi=="RxLev"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxLev'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent Coverage',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100]
    
            },{
                name: 'Good Coverage',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100]
    
            }, {
                name: 'Bad Coverage ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100]
    
            }
			]
        });
    });
    

}	
				
else if((nb==5)&&(kpi=="RxLev"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
var s5=parseInt(dataSource[20][tab[4]].value)+parseInt(dataSource[21][tab[4]].value)+parseInt(dataSource[22][tab[4]].value)+parseInt(dataSource[23][tab[4]].value)+parseInt(dataSource[24][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxLev'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent Coverage',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[20][tab[4]].value)/s5*100]
    
            },{
                name: 'Good Coverage ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100,parseInt(dataSource[21][tab[4]].value)/s5*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100,parseInt(dataSource[22][tab[4]].value)/s5*100]
    
            }, {
                name: 'Bad Coverage ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100,parseInt(dataSource[23][tab[4]].value)/s5*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100,parseInt(dataSource[24][tab[4]].value)/s5*100]
    
            }
			]
        });
    });
    

}		
else if((nb==6)&&(kpi=="RxLev"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
var s5=parseInt(dataSource[20][tab[4]].value)+parseInt(dataSource[21][tab[4]].value)+parseInt(dataSource[22][tab[4]].value)+parseInt(dataSource[23][tab[4]].value)+parseInt(dataSource[24][tab[4]].value);
var s6=parseInt(dataSource[25][tab[5]].value)+parseInt(dataSource[26][tab[5]].value)+parseInt(dataSource[27][tab[5]].value)+parseInt(dataSource[28][tab[5]].value)+parseInt(dataSource[29][tab[5]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxLev'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent Coverage',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[20][tab[4]].value)/s5*100,parseInt(dataSource[25][tab[5]].value)/s6*100]
    
            },{
                name: 'Good Coverage ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100,parseInt(dataSource[21][tab[4]].value)/s5*100,parseInt(dataSource[26][tab[5]].value)/s6*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100,parseInt(dataSource[22][tab[4]].value)/s5*100,parseInt(dataSource[27][tab[5]].value)/s6*100]
    
            }, {
                name: 'Bad Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100,parseInt(dataSource[23][tab[4]].value)/s5*100,parseInt(dataSource[28][tab[5]].value)/s6*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100,parseInt(dataSource[24][tab[4]].value)/s5*100,parseInt(dataSource[29][tab[5]].value)/s6*100]
    
            }
			]
        });
    });
    

}			
		
 

//rxqual :multi-analyse
if((nb==2)&&(kpi=="RxQual"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxQual'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Excelent Signal',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100]
    
            }, {
                name: 'Good Signal',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            }, {
                name: 'Average Signal',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100]
    
            },{
                name: 'Bad Signal',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100]
    
            }
			]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="RxQual"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxQual'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Excelent Signal',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100]
    
            }, {
                name: 'Good Signal',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100]
    
            }, {
                name: 'Average Signal',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100]
    
            },{
                name: 'Bad Signal',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100]
    
            }
			]
        });
    });
    


}

else if((nb==4)&&(kpi=="RxQual"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxQual'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Excelent Signal',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100]
    
            }, {
                name: 'Good Signal',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100]
    
            }, {
                name: 'Average Signal',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100]
    
            },{
                name: 'Bad Signal',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100]
    
            }
			]
        });
    });
    

}	
else if((nb==5)&&(kpi=="RxQual"))
{
$("#chartContainerMulti").show();
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
var s5=parseInt(dataSource[16][tab[4]].value)+parseInt(dataSource[17][tab[4]].value)+parseInt(dataSource[18][tab[4]].value)+parseInt(dataSource[19][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxQual'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Excelent Signal',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100,parseInt(dataSource[16][tab[4]].value)/s5*100]
    
            }, {
                name: 'Good Signal',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100,parseInt(dataSource[17][tab[4]].value)/s5*100]
    
            }, {
                name: 'Average Signal',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100,parseInt(dataSource[18][tab[4]].value)/s5*100]
    
            },{
                name: 'Bad Signal',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[19][tab[4]].value)/s5*100]
    
            }
			]
        });
    });
    

}			
else if((nb==6)&&(kpi=="RxQual"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
var s5=parseInt(dataSource[16][tab[4]].value)+parseInt(dataSource[17][tab[4]].value)+parseInt(dataSource[18][tab[4]].value)+parseInt(dataSource[19][tab[4]].value);
var s6=parseInt(dataSource[20][tab[5]].value)+parseInt(dataSource[21][tab[5]].value)+parseInt(dataSource[22][tab[5]].value)+parseInt(dataSource[23][tab[5]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI RxQual'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Excelent Signal',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100,parseInt(dataSource[16][tab[4]].value)/s5*100,parseInt(dataSource[20][tab[5]].value)/s6*100]
    
            }, {
                name: 'good Signal',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100,parseInt(dataSource[17][tab[4]].value)/s5*100,parseInt(dataSource[21][tab[5]].value)/s6*100]
    
            }, {
                name: 'Average Signal',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100,parseInt(dataSource[18][tab[4]].value)/s5*100,parseInt(dataSource[22][tab[5]].value)/s6*100]
    
            },{
                name: 'Bad Signal',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[19][tab[4]].value)/s5*100,parseInt(dataSource[23][tab[5]].value)/s6*100]
    
            }
			]
        });
    });
    

}			

//SIR:multi-analyse---------------------------------
if((nb==2)&&(kpi=="SIR"))
{
$("#chartContainerMulti").show();
 var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
 var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
console.log(s1)
console.log(s2);

$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI SIR'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
			
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            }]
			,
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            }
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="SIR"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
 var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
 var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI SIR'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
			series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100]
    
            }, {
                name: 'Poor',
                data:[parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100]
    
            }],
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            
        });
    });
    


}

else if((nb==4)&&(kpi=="SIR"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI SIR'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                 headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100]
    
            }]
        });
    });
    

}		
else if((nb==5)&&(kpi=="SIR"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI SIR'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100]
    
            }]
        });
    });
    

}			

else if((nb==6)&&(kpi=="SIR"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
var s6=parseInt(dataSource[15][tab[5]].value)+parseInt(dataSource[16][tab[5]].value)+parseInt(dataSource[17][tab[5]].value)
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI SIR'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100,parseInt(dataSource[15][tab[5]].value)/s6*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100,parseInt(dataSource[16][tab[5]].value)/s6*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100,parseInt(dataSource[17][tab[5]].value)/s6*100]
    
            }]
        });
    });
    

}		
//----------------------------------------------kpi Best RSCP:multi-analyse---------------------------------
if((nb==2)&&(kpi=="Best RSCP"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);

$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best RSCP'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            }]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="Best RSCP"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);

$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best RSCP'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
           series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100]
    
            }, {
                name: 'Poor',
                data:[parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100]
    
            }]
        });
    });
    


}

else if((nb==4)&&(kpi=="Best RSCP"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best RSCP'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
             series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100]
    
            }]
        });
    });
    

}		
else if((nb==5)&&(kpi=="Best RSCP"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best RSCP'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100]
    
            }]
        });
    });
    

}			

else if((nb==6)&&(kpi=="Best RSCP"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
var s6=parseInt(dataSource[15][tab[5]].value)+parseInt(dataSource[16][tab[5]].value)+parseInt(dataSource[17][tab[5]].value)
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best RSCP'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
              series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100,parseInt(dataSource[15][tab[5]].value)/s6*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100,parseInt(dataSource[16][tab[5]].value)/s6*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100,parseInt(dataSource[17][tab[5]].value)/s6*100]
    
            }]
        });
    });
    

}						
		
//----------------------------------------------kpi Best EcIo:multi-analyse---------------------------------
if((nb==2)&&(kpi=="Best EcIo"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);

$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best EcIo'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                    ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
           series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            }]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="Best EcIo"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best EcIo'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'percent'
                }
            },
            tooltip: {
                 headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
           series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100]
    
            }, {
                name: 'Poor',
                data:[parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100]
    
            }]
        });
    });
    


}

else if((nb==4)&&(kpi=="Best EcIo"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best EcIo'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
           series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100]
    
            }]
        });
    });
    

}	
else if((nb==5)&&(kpi=="Best EcIo"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best EcIo'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
             series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100]
    
            }]
        });
    });
    

}			

else if((nb==6)&&(kpi=="Best EcIo"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value);
var s2=parseInt(dataSource[3][tab[1]].value)+parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value);
var s3=parseInt(dataSource[6][tab[2]].value)+parseInt(dataSource[7][tab[2]].value)+parseInt(dataSource[8][tab[2]].value);
var s4=parseInt(dataSource[9][tab[3]].value)+parseInt(dataSource[10][tab[3]].value)+parseInt(dataSource[11][tab[3]].value);
var s5=parseInt(dataSource[12][tab[4]].value)+parseInt(dataSource[13][tab[4]].value)+parseInt(dataSource[14][tab[4]].value);
var s6=parseInt(dataSource[15][tab[5]].value)+parseInt(dataSource[16][tab[5]].value)+parseInt(dataSource[17][tab[5]].value)
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Best EcIo'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
             series: [{
                name: 'Good',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[3][tab[1]].value)/s2*100,parseInt(dataSource[6][tab[2]].value)/s3*100,parseInt(dataSource[9][tab[3]].value)/s4*100,parseInt(dataSource[12][tab[4]].value)/s5*100,parseInt(dataSource[15][tab[5]].value)/s6*100]
    
            }, {
                name: 'Fair',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[7][tab[2]].value)/s3*100,parseInt(dataSource[10][tab[3]].value)/s4*100,parseInt(dataSource[13][tab[4]].value)/s5*100,parseInt(dataSource[16][tab[5]].value)/s6*100]
    
            }, {
                name: 'Poor',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[11][tab[3]].value)/s4*100,parseInt(dataSource[14][tab[4]].value)/s5*100,parseInt(dataSource[17][tab[5]].value)/s6*100]
    
            }]
        });
    });
    

}		

//----------------------------------------------kpi Rx Power:multi-analyse---------------------------------
if((nb==2)&&(kpi=="Rx Power"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Rx Power'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good Coverage',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            }, {
                name: 'Low Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100]
    
            }
			]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="Rx Power"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Rx Power'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good Coverage',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100]
    
            }, {
                name: 'Low Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100]
    
            }
			]
        });
    });
    


}

else if((nb==4)&&(kpi=="Rx Power"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Rx Power'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good Coverage',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100]
    
            }, {
                name: 'Low Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100]
    
            }
			]
        });
    });
    

}	
else if((nb==5)&&(kpi=="Rx Power"))
{
$("#chartContainerMulti").show();
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
var s5=parseInt(dataSource[16][tab[4]].value)+parseInt(dataSource[17][tab[4]].value)+parseInt(dataSource[18][tab[4]].value)+parseInt(dataSource[19][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Rx Power'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good Coverage',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100,parseInt(dataSource[16][tab[4]].value)/s5*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100,parseInt(dataSource[17][tab[4]].value)/s5*100]
    
            }, {
                name: 'Low Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100,parseInt(dataSource[18][tab[4]].value)/s5*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[19][tab[4]].value)/s5*100]
    
            }
			]
        });
    });
    

}			
else if((nb==6)&&(kpi=="Rx Power"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value);
var s2=parseInt(dataSource[4][tab[1]].value)+parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value);
var s3=parseInt(dataSource[8][tab[2]].value)+parseInt(dataSource[9][tab[2]].value)+parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value);
var s4=parseInt(dataSource[12][tab[3]].value)+parseInt(dataSource[13][tab[3]].value)+parseInt(dataSource[14][tab[3]].value)+parseInt(dataSource[15][tab[3]].value);
var s5=parseInt(dataSource[16][tab[4]].value)+parseInt(dataSource[17][tab[4]].value)+parseInt(dataSource[18][tab[4]].value)+parseInt(dataSource[19][tab[4]].value);
var s6=parseInt(dataSource[20][tab[5]].value)+parseInt(dataSource[21][tab[5]].value)+parseInt(dataSource[22][tab[5]].value)+parseInt(dataSource[23][tab[5]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI Rx Power'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Good Coverage',
                data: [parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[4][tab[1]].value)/s2*100,parseInt(dataSource[8][tab[2]].value)/s3*100,parseInt(dataSource[12][tab[3]].value)/s4*100,parseInt(dataSource[16][tab[4]].value)/s5*100,parseInt(dataSource[20][tab[5]].value)/s6*100]
    
            }, {
                name: 'Average Coverage',
                data: [parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[9][tab[2]].value)/s3*100,parseInt(dataSource[13][tab[3]].value)/s4*100,parseInt(dataSource[17][tab[4]].value)/s5*100,parseInt(dataSource[21][tab[5]].value)/s6*100]
    
            }, {
                name: 'Low Coverage',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[14][tab[3]].value)/s4*100,parseInt(dataSource[18][tab[4]].value)/s5*100,parseInt(dataSource[22][tab[5]].value)/s6*100]
    
            },{
                name: 'No Coverage',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[19][tab[4]].value)/s5*100,parseInt(dataSource[23][tab[5]].value)/s6*100]
    
            }
			]
        });
    });
    

}			
//----------------------------------------------kpi BLER:multi-analyse---------------------------------
if((nb==2)&&(kpi=="BLER"))
{

$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                 text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI BLER'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                 headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100]
    
            },{
                name: 'Good ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100]
    
            }, {
                name: 'Average',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100]
    
            }, {
                name: 'Bad ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100]
    
            },{
                name: 'Very Bad',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100]
    
            }
			]
        });
    });
    

}		
		
else if((nb==3)&&(kpi=="BLER"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI BLER'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100]
    
            },{
                name: 'Good ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100]
    
            }, {
                name: 'Average',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100]
    
            }, {
                name: 'Bad ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100]
    
            },{
                name: 'Very Bad',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100]
    
            }
			]
        });
    });
    


}

else if((nb==4)&&(kpi=="BLER"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI BLER'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100]
    
            },{
                name: 'Good ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100]
    
            }, {
                name: 'Average',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100]
    
            }, {
                name: 'Bad ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100]
    
            },{
                name: 'Very Bad',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100]
    
            }
			]
        });
    });
    

}	
				
else if((nb==5)&&(kpi=="BLER"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
var s5=parseInt(dataSource[20][tab[4]].value)+parseInt(dataSource[21][tab[4]].value)+parseInt(dataSource[22][tab[4]].value)+parseInt(dataSource[23][tab[4]].value)+parseInt(dataSource[24][tab[4]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI BLER'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[20][tab[4]].value)/s5*100]
    
            },{
                name: 'Good ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100,parseInt(dataSource[21][tab[4]].value)/s5*100]
    
            }, {
                name: 'Average',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100,parseInt(dataSource[22][tab[4]].value)/s5*100]
    
            }, {
                name: 'Bad ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100,parseInt(dataSource[23][tab[4]].value)/s5*100]
    
            },{
                name: 'Very Bad',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100,parseInt(dataSource[24][tab[4]].value)/s5*100]
    
            }
			]
        });
    });
    

}		
else if((nb==6)&&(kpi=="BLER"))
{
$("#chartContainerMulti").show();
var s1=parseInt(dataSource[0][tab[0]].value)+parseInt(dataSource[1][tab[0]].value)+parseInt(dataSource[2][tab[0]].value)+parseInt(dataSource[3][tab[0]].value)+parseInt(dataSource[4][tab[0]].value);
var s2=parseInt(dataSource[5][tab[1]].value)+parseInt(dataSource[6][tab[1]].value)+parseInt(dataSource[7][tab[1]].value)+parseInt(dataSource[8][tab[1]].value)+parseInt(dataSource[9][tab[1]].value);
var s3=parseInt(dataSource[10][tab[2]].value)+parseInt(dataSource[11][tab[2]].value)+parseInt(dataSource[12][tab[2]].value)+parseInt(dataSource[13][tab[2]].value)+parseInt(dataSource[14][tab[2]].value);
var s4=parseInt(dataSource[15][tab[3]].value)+parseInt(dataSource[16][tab[3]].value)+parseInt(dataSource[17][tab[3]].value)+parseInt(dataSource[18][tab[3]].value)+parseInt(dataSource[19][tab[3]].value);
var s5=parseInt(dataSource[20][tab[4]].value)+parseInt(dataSource[21][tab[4]].value)+parseInt(dataSource[22][tab[4]].value)+parseInt(dataSource[23][tab[4]].value)+parseInt(dataSource[24][tab[4]].value);
var s6=parseInt(dataSource[25][tab[5]].value)+parseInt(dataSource[26][tab[5]].value)+parseInt(dataSource[27][tab[5]].value)+parseInt(dataSource[28][tab[5]].value)+parseInt(dataSource[29][tab[5]].value);
$(function () {
        $('#chartContainerMulti').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Analysis of several cities'
            },
            subtitle: {
                text: 'KPI BLER'
            },
            xAxis: {
                categories: [
                    tab[0],
                    tab[1],
					tab[2],
					tab[3],
					tab[4],
					tab[5]
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percent'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:14px"><center>{point.key}</center></span><hr><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}%</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
			{
                name: 'Excellent',
                   data:[parseInt(dataSource[0][tab[0]].value)/s1*100,parseInt(dataSource[5][tab[1]].value)/s2*100,parseInt(dataSource[10][tab[2]].value)/s3*100,parseInt(dataSource[15][tab[3]].value)/s4*100,parseInt(dataSource[20][tab[4]].value)/s5*100,parseInt(dataSource[25][tab[5]].value)/s6*100]
    
            },{
                name: 'Good ',
                   data:[parseInt(dataSource[1][tab[0]].value)/s1*100,parseInt(dataSource[6][tab[1]].value)/s2*100,parseInt(dataSource[11][tab[2]].value)/s3*100,parseInt(dataSource[16][tab[3]].value)/s4*100,parseInt(dataSource[21][tab[4]].value)/s5*100,parseInt(dataSource[26][tab[5]].value)/s6*100]
    
            }, {
                name: 'Average',
                data: [parseInt(dataSource[2][tab[0]].value)/s1*100,parseInt(dataSource[7][tab[1]].value)/s2*100,parseInt(dataSource[12][tab[2]].value)/s3*100,parseInt(dataSource[17][tab[3]].value)/s4*100,parseInt(dataSource[22][tab[4]].value)/s5*100,parseInt(dataSource[27][tab[5]].value)/s6*100]
    
            }, {
                name: 'Bad ',
                data: [parseInt(dataSource[3][tab[0]].value)/s1*100,parseInt(dataSource[8][tab[1]].value)/s2*100,parseInt(dataSource[13][tab[2]].value)/s3*100,parseInt(dataSource[18][tab[3]].value)/s4*100,parseInt(dataSource[23][tab[4]].value)/s5*100,parseInt(dataSource[28][tab[5]].value)/s6*100]
    
            },{
                name: 'Very Bad',
                data: [parseInt(dataSource[4][tab[0]].value)/s1*100,parseInt(dataSource[9][tab[1]].value)/s2*100,parseInt(dataSource[14][tab[2]].value)/s3*100,parseInt(dataSource[19][tab[3]].value)/s4*100,parseInt(dataSource[24][tab[4]].value)/s5*100,parseInt(dataSource[29][tab[5]].value)/s6*100]
    
            }
			]
        });
    });
    

}			
		
		
		
		
		
		
		
		
		
		
	
	
	
	
		
		
});//fin d'appel ajax	
}//fin de la partie multi-file		
	
	
	});
});






