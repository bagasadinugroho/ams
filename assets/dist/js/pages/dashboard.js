/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

  'use strict'

  /* Morris.js Charts */
  // Asset Chart
  var hasil=[];
  var area = {};
  $.get( "http://localhost/ams/api", function( data ) {
    hasil=JSON.parse(data);
    // data.forEach(x => {
    //   hasil.push({location:x.locataion,jumlah:parseInt(x.jumlah)});
    // });
    // for (var i = 0; i < data.length; i++){
    //   console.log(data[i]);
    // }
    // console.log(hasil);
    area = new Morris.Bar({
      element   : 'asset-chart',
      resize    : true,
      data      : hasil,
      xkey      : 'location',
      ykeys     : ['jumlah'],
      labels    : ['Asset'],
      lineColors: ['#007cff'],
      hideHover : 'auto'
    });
    // console.log(area.data);
  });
    
  // var area = new Morris.Area({
  //   element   : 'asset-chart',
  //   resize    : true,
  //   data      : [
  //     { y: '2011 Q1', item1: 2666},
  //     { y: '2011 Q2', item1: 2778},
  //     { y: '2011 Q3', item1: 4912},
  //     { y: '2011 Q4', item1: 3767},
  //     { y: '2013 Q2', item1: 8432}
  //   ],
  //   xkey      : 'y',
  //   ykeys     : ['item1'],
  //   labels    : ['Item 1'],
  //   lineColors: ['#007cff'],
  //   hideHover : 'auto'
  // })
})
