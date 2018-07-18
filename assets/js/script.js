$(function(){
    $('.accordian li:odd:gt(0)').hide();

    $('.accordian li:odd').addClass('dimension');
    $('.accordian li:even:even').addClass('even');
    $('.accordian li:even:odd').addClass('odd');

    $('.accordian li:even').css('cursor', 'pointer');

    $('.accordian li:even').click(function(){
        var cur = $(this).next();
        var old = $('.accordian li:odd:visible');

        if(cur.is(':visible'))
            return false;

        old.slideToggle(500);
        cur.stop().slideToggle(500);
    });

});

var ctx = document.getElementById("myChart").getContext("2d");

var acidity = document.getElementById('acidity').value;
var flavor = document.getElementById('flavor').value;
var sweetness = document.getElementById('sweetness').value;
var aroma = document.getElementById('aroma').value;

var myChart = new Chart(ctx, {
type: 'horizontalBar',
      data: {
          labels: ["arome", "saveur", "acidité", "douceur"],
          datasets: [{
              label: '',
              data: [aroma, flavor, acidity, sweetness],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)'

              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)'

              ],
              borderWidth: 1
          }]
      },
      options: {
            legend:{
                display:false
            },

          scales: {
              xAxes: [{
                ticks: {
            		min: 0
                }
            }],
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });

