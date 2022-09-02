/**
 * Theme: Neko
 * Author: MannatThemes
 * Module/App: App.js
 */


/*var dash_spark_1 = {
    
    chart: {
        type: 'area',
        height: 80,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2
      },
    fill: {
        opacity: 0.05,
    },
    series: [{
      data: [23, 50, 60, 170, 80, 90, 100, 95, 85, 75, 65, 55, 65, 75, 85, 95, 105, 80, 70, 60, 50, 40, 30, 45, 55, 65, 75, 85, 95, 100, 80]
    }],
    yaxis: {
        min: 0
    },
    colors: ['#fbb624'],
    tooltip: {
      theme: "dark",      
    }
  }*/
  var dash_spark_1 = {
    
    chart: {
        type: 'area',
        height: 80,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2
      },
    fill: {
        opacity: 0.05,
    },
   
    series:[ {
        name: '', 
       data: []
    }
    ],
    xaxis: {
        categories: [],
        crosshairs: {
            show: false,
        },
    },
    yaxis: {
        min: 0
    },
    colors: ['#fbb624'],
    tooltip: {
      theme: "dark",
       y: {
            formatter:function(val) {
                return"+ "+val+" челиков"
            },
        },
    }
}

 var param = document.querySelector(".simon").innerText.split(' ');
var param2 = document.querySelector(".mouth").innerText.split(' ');  
var param4 = document.querySelector(".views").innerText.split(' ');
var d = 0;
for(i = 0; i <= param; i++){
    if (param4[i] == null){
        param4[i] = 0;
    }
    else dash_spark_1.series[0].data[i] = param4[i];
dash_spark_1.xaxis.categories[i] = i + " " + param2;
d ++;
} 
/**dash_spark_1.series[0].data[d+1] = 0;
dash_spark_1.xaxis.categories[d+1] = 12 + " " + 12;*/



  new ApexCharts(document.querySelector("#apex_column1"), dash_spark_1).render();
 //dash-colunm-1
  
 var options = {
    
    chart: {
        type: 'area',
        height: 80,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2
      },
    fill: {
        opacity: 0.05,
    },
   
    series:[ {
        name: '', 
       data: [0]
    }
    ],
    xaxis: {
        categories: [0],
        crosshairs: {
            show: false,
        },
    },
    yaxis: {
        min: 0
    },
    colors: ['#1ecab8'],
    tooltip: {
      theme: "dark",
       y: {
            formatter:function(val) {
                return"+ "+val+" челиков"
            },
        },
    }
}

 var param = document.querySelector(".simon").innerText.split(' ');
var param2 = document.querySelector(".mouth").innerText.split(' ');
    var param3 = document.querySelector(".hosts").innerText.split(' ');
    var kl = 0;
for(i = 0; i <= param; i++){
     if (param3[i] == null){
        param3[i] = 0;
    }
options.series[0].data[i] = param3[i];
options.xaxis.categories[i] = i + " " + param2;
kl ++;
}
options.series[0].data[kl+1] = 0;
options.xaxis.categories[kl+1] = 12 + " " + 12;

var chart = new ApexCharts(
    document.querySelector("#dash_spark_1"),
    options
  );
  chart.render();


  //dash-radialBar
  
var options = {
    chart: {
        height: 180,
        type: "radialBar",
      },
    
      series: [67],
      colors: ["#20E647"],
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: "60%",
            background: "#18191f"
          },
          track: {
            background: '#21253f',
            dropShadow: {
              enabled: true,             
              top: 2,
              left: 0,
              blur: 4,
              opacity: 0.15
            }
          },
          dataLabels: {
            name: {
              offsetY: -5,
              color: "#fff",
              fontSize: "14px",
            },
            value: {
                offsetY: 5,
              color: "#fff",
              fontSize: "14px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "vertical",
          gradientToColors: ["#fbb624"],
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "round"
      },
      labels: ["Progress"]
    };
    
    var chart = new ApexCharts(document.querySelector("#d1-radialBarMap"), options);
    
    chart.render();


    
//Dash-Map

$('#world-map-markers').vectorMap({
  map : 'world_mill_en',
  scaleColors : ['#eff0f1', '#eff0f1'],
  normalizeFunction : 'polynomial',
  hoverOpacity : 0.7,
  hoverColor : false,
  regionStyle : {
      initial : {
          fill : '#4c5486'
      }
  },

  markerStyle: {
    initial: {
      stroke: "transparent"
    },
    hover: {
      stroke: "rgba(112, 112, 112, 0.30)"
    }
  },
  backgroundColor : 'transparent',

  markers: [
    {
      latLng: [37.090240, -95.712891],
      name: "USA",
      style: {
        fill: "#f93b7a"
      }
    },
    {
      latLng: [71.706940, -42.604301],
      name: "Greenland",
      style: {
        fill: "#f0961f"
      }
    },
    {
      latLng: [-21.943369, 123.102198],
      name: "Australia",
      style: {
        fill: "#5766da"
      }
    }
  ],
  series: {
    regions: [{
        values: {
            "AU": '#c4c9f2',
            "US": '#fdcede',
            "GL": '#fae1be',
        },
        attribute: 'fill'
    }]
},
});


//payment-widget


var options123 = {
  chart: {
      height: 250,
      type: 'donut',
  }, 
  series: [],
  stroke: {
    colors: undefined,
},
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -13
  },
  labels: [ "Ебашим", "Отказались", "Перезвоны", "Встречи", "Попробыввть позже", "Однажды", "Ждем"],
  colors: ["#00FF00", "#FF0000", "#F6F60B", "#E366E8", "#669AE8", "#0B69F6", "#054EBC"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  
}
//"ЕБашим", "Отказались", "Перезвоны", "Встречи", "Попробыввть позже", "Однажды", "Ждем"
//options123.series[0] = 190;
 var param5 = document.querySelector(".call_mouth_all").innerText.split(' ');

for(i = 0; i < 7; i++){
 

options123.series[i] = Number(param5[i]);
  console.log(options123.series[i]);
}


var chart = new ApexCharts(
  document.querySelector("#d1_payment"),
  options123
);

chart.render();

var options = {
  chart: {
      height: 250,
      type: 'donut',
  }, 
  series: [],
  stroke: {
    colors: undefined,
},
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -13
  },
  labels: [ "Ебашим", "Отказались", "Перезвоны", "Встречи", "Попробыввть позже", "Однажды", "Ждем"],
  colors: ["#00FF00", "#FF0000", "#F6F60B", "#E366E8", "#669AE8", "#0B69F6", "#054EBC"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  
}

 var param6 = document.querySelector(".call_day_all").innerText.split(' ');

for(i = 0; i < 7; i++){
 

options.series[i] = Number(param6[i]);
  console.log(options123.series[i]);
}


var chart = new ApexCharts(
  document.querySelector("#d2_payment"),
  options
);

chart.render();



