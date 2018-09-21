let roiChart = document.getElementById('roiChart').getContext('2d');

let theChart = new Chart(roiChart, {
  type:'bar',
  data:{
    labels:['First Year','Second Year','Third Year'],
    datasets:[{
      label: 'ROI',
      data:[
        617594,
        581045,
        553060,
        //<?php echo $valSavings1; ?>,
        //<?php echo $valSavings2; ?>,
        //<?php echo $valSavings3; ?>
      ],
      backgroundColor:['#ffae19','#ffa500','#ec8c2d'],
      hoverBorderWidth: 1,
      hoverBorderColor: '#000'
    }]
  },
  options:{
    maintainAspectRatio: false,
    title: {
      display: true,
      text: 'Total Savings',
      fontSize: 20
    },
    scales: {
      xAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Time (Yr)',
          fontSize: 19,
          fontColor: "#417379",
          fontFamily: "Geogtq"
        }
      }],
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Value ($)',
          fontSize: 15,
          fontColor: "#417379",
          fontFamily: "OpenSans"
        },
        ticks: {
          beginAtZero: true
        }
      }]
    }

  }
});
