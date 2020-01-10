$(document).ready(function () {
  $('#editguru').click(function (ev) {
    $.ajax({
      type: "GET",
      url: "http://dev.farizdotid.com/api/daerahindonesia/provinsi",
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.semuaprovinsi.length; i++) {
          html += '<option value=' + data.semuaprovinsi[i].id + '>' + data.semuaprovinsi[i].nama + '</option>';
        }
        $('.provinsi').html(html);
      }
    });
  });
  $('.provinsi').change(function (ev) {
    $('.formkab').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/' + id + '/kabupaten',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.kabupatens.length; i++) {
          html += '<option value=' + data.kabupatens[i].id + '>' + data.kabupatens[i].nama + '</option>';
        }
        $('.kabupaten').html(html);
      }
    });
  })
  $('.kabupaten').change(function (ev) {
    $('.formkec').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/' + id + '/kecamatan',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.kecamatans.length; i++) {
          html += '<option value=' + data.kecamatans[i].id + '>' + data.kecamatans[i].nama + '</option>';
        }
        $('.kecamatan').html(html);
      }
    });
  })
  $('.kecamatan').change(function (ev) {
    $('.formkel').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/kecamatan/' + id + '/desa',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.desas.length; i++) {
          html += '<option value=' + data.desas[i].id + '>' + data.desas[i].nama + '</option>';
        }
        $('.kelurahan').html(html);
      }
    });
  })

});


$(document).ready(function () {
  $('.lihatnilai').click(function (ev) {
    ev.preventDefault();

    var kd = $(this).attr('data-kd');
    // $('#kd_id').val(kd);
    var datakd = $(this).attr('data-namakd');
    var kelas = $(this).attr('data-kelas');
    var ctx = $('#chartkd');
    console.log(kd, kelas);
    $.ajax({
      type: "GET",
      url: `${urllihatnilai}/${kd}/${kelas}`, // echo php raiso neng file js
      dataType: "JSON",
      success: function (data) {
        $('#kd').removeClass('d-none');
        $('#kd').html(datakd);
        $('.nilai').removeClass('d-none');
        var html = '';
        var i;
        for (i = 0; i < data.length; i++) {
          html += '<tr>' +
            '<td>' + data[i].nis + '</td>' +
            '<td>' + data[i].nama + '</td>' +
            '<td width="12%">' +
            '<input name="komda" value="' + kd + '" hidden>' +
            '<input name="nilai[' + data[i].id_siswa + ']" style="width: 100%" type="number" value="' + data[i].nilai + '" max="100"></td>' +
            '</tr>';
        }
        $('.datanilai').html(html);
      }
    });
    $.ajax({
      type: "GET",
      url: `${urllihatnilai}/kd/${kd}`,
      dataType: "JSON",
      success: function (data) {
        $('#chartpiekd').removeClass('d-none');
        $('#kdname').html(datakd);
        var countdata = [];
        var labeldata = [];
        var coloR = [];
        var bgcolorchart = [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)'
        ];
        var i;
        for (i = 0; i < data.length; i++) {
          countdata.push(data[i].countt);
          labeldata.push("Nilai " + data[i].rangenilai);
        }
        datachart = {
          datasets: [{
            label: labeldata,
            data: countdata,
            backgroundColor: bgcolorchart,
            borderColor: 'rgba(200,200,200,0.75)',
            hoverBorderColor: 'rgba(200,200,200,1)',
          }],
          labels: labeldata,
          // These labels appear in the legend and in the tooltips when hovering different arcs
        };
        var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: datachart,
          options: {
            responsive: true
          }
        });
      }
    });
    return false;
  });

  var kd = $(this).attr("data-kd");
  // $('#kd_id').val(kd);
  var datakd = $(this).attr("data-namakd");
  var kelas = $(this).attr("data-kelas");
  var ctx = $("#chartkd");
  console.log(kd, kelas);
  $.ajax({
    type: "GET",
    url: `${urllihatnilai}/${kd}/${kelas}`, // echo php raiso neng file js
    dataType: "JSON",
    success: function (data) {
      $("#kd").removeClass("d-none");
      $("#kd").html(datakd);
      $(".nilai").removeClass("d-none");
      var html = "";
      var i;
      for (i = 0; i < data.length; i++) {
        html +=
          "<tr>" +
          "<td>" +
          data[i].nis +
          "</td>" +
          "<td>" +
          data[i].nama +
          "</td>" +
          '<td width="12%">' +
          '<input name="komda" value="' +
          kd +
          '" hidden>' +
          '<input name="nilai[' +
          data[i].id_siswa +
          ']" style="width: 100%" type="number" value="' +
          data[i].nilai +
          '" max="100"></td>' +
          "</tr>";
      }
      $(".datanilai").html(html);
    }
  });
  $.ajax({
    type: "GET",
    url: `${urllihatnilai}/kd/${kd}`,
    dataType: "JSON",
    success: function (data) {
      $("#chartpiekd").removeClass("d-none");
      $("#kdname").html(datakd);
      var countdata = [];
      var labeldata = [];
      var coloR = [];
      var bgcolorchart = [
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)"
      ];
      var i;
      for (i = 0; i < data.length; i++) {
        countdata.push(data[i].countt);
        labeldata.push("Nilai " + data[i].rangenilai);
      }
      datachart = {
        datasets: [{
          label: labeldata,
          data: countdata,
          backgroundColor: bgcolorchart,
          borderColor: "rgba(200,200,200,0.75)",
          hoverBorderColor: "rgba(200,200,200,1)"
        }],
        labels: labeldata
        // These labels appear in the legend and in the tooltips when hovering different arcs
      };
      var myPieChart = new Chart(ctx, {
        type: "pie",
        data: datachart,
        options: {
          responsive: true
        }
      });
    }
  });
  return false;
});
// });
$(document).ready(function () {
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    $("#countdown").html(
      days + " : " + hours + " : " + minutes + " : " + seconds
    );

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      $("#countdown").html("EXPIRED");
    }
  }, 1000);
});

// //DATA TABLES FOR EDIT
// 	$(document).ready(function(){
// 		$('#table-a').DataTable({
// 			"dom": '<"pull-left"f><"pull-right"l>tip',
// 			"language": {
// 				'searchPlaceholder': 'Search...'
// 			},
// 			"lengthChange": false,
// 			"ordering": true,
// 			"autoWidth": false,
// 			"scrollX": true,
// 		} );
// 	});
//
// 	$(document).ready( function() {
// 		$('.daterangepicker1').mask('00/00/0000');
// 		$('.daterangepicker1').daterangepicker({
// 			"singleDatePicker": true,
// 			"timePicker": false,
// 			autoUpdateInput: false,
// 			"opens": "left",
// 			locale: {
// 					format: 'DD/MM/YYYY'
// 				},
//
// 		});
// 		$('.daterangepicker1').on('apply.daterangepicker', function(ev, picker) {
// 			$(this).val(picker.startDate.format('DD/MM/YYYY'));
// 		});
// 	});
//
// 	$(document).ready( function() {
// 		$('.daterangepicker2').mask('00/00/0000 - 00/00/0000');
// 		$('.daterangepicker2').daterangepicker({
// 			"singleDatePicker": false,
// 			 "autoApply": true,
// 			"timePicker": false,
// 			autoUpdateInput: false,
// 			"opens": "left",
// 			locale: {
// 					format: 'DD/MM/YYYY'
// 				},
//
// 		});
// 		$('.daterangepicker2').on('apply.daterangepicker', function(ev, picker) {
// 			$(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
//
// 		});
// 	});
//
// 	function hanyaAngka(e, decimal) {
// 		var key;
// 		var keychar;
// 		 if (window.event) {
// 			 key = window.event.keyCode;
// 		 } else
// 		 if (e) {
// 			 key = e.which;
// 		 } else return true;
// 		keychar = String.fromCharCode(key);
// 		if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
// 			return true;
// 		} else
// 		if ((("0123456789.").indexOf(keychar) > -1)) {
// 			return true;
// 		} else
// 		if (decimal && (keychar == ".")) {
// 			return true;
// 		} else return false;
// 	 }
//
//

// $.ajax({
// 	type: "GET",
// 	url: `${urlchart}/${kd}/${kelas}`, // echo php raiso neng file js
// 	dataType: "JSON",
// 	success: function (data) {
// 		var html = '';
// 		var i;
// 		for (i = 0; i < data.length; i++) {
// 			html += '<tr>' +
// 				'<td>' + data[i].nis + '</td>' +
// 				'<td>' + data[i].nama + '</td>' +
// 				'<td width="12%">' +
// 				'<input name="komda" value="' + kd + '" hidden>' +
// 				'<input name="nilai[' + data[i].id_siswa + ']" style="width: 100%" type="number" value="' + data[i].nilai + '" max="100"></td>' +
// 				'</tr>';
// 		}
// 		$('.datanilai').html(html);
// 	}
// });

$(document).ready(function () {
  $('#btnexport').click(function (ev) {
    ev.preventDefault();
    html2canvas($('#reportkelas'), {
      onrendered: function (canvas) {
        var data = canvas.toDataURL();
        var docDefinition = {
          pageSize : 'A4',
          pageOrientation : 'landscape',
          content: [
              {
            image: data,
            width: 700
          }]
        };
        pdfMake.createPdf(docDefinition).open();
      }
    });
  })

});
$(document).ready(function () {
  function getRandomColor() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgb(" + r + "," + g + "," + b + ")";
  }
  var bgcolor = [];
  var i;

  $(document).ready(function () {
    var lbl = [];
    var dat = [];
    $.ajax({
      url: `${urlchart}`,
      type: "GET",
      dataType: "json",
      success: function (data) {
        $.each(data, function (key, value) {
          lbl.push(value.kd);
          dat.push(value.nilai);
        })
        var myJSON = JSON.stringify(lbl);
        var xyz = lbl;
        var dat1 = dat;
        var ctx = $('#myChart');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: xyz,
            datasets: [{
              label: "My First dataset",
              backgroundColor: "rgba(38, 185, 154, 0.31)",
              borderColor: "rgba(38, 185, 154, 0.7)",
              pointBorderColor: "rgba(38, 185, 154, 0.7)",
              pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
              pointHoverBackgroundColor: "#fff",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointBorderWidth: 1,
              data: dat1
            }]

          },
        });
      }
    });
  });
});


$(document).ready(function () {
  $('#editsiswa').click(function (ev) {
    $.ajax({
      type: "GET",
      url: "http://dev.farizdotid.com/api/daerahindonesia/provinsi",
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.semuaprovinsi.length; i++) {
          html += '<option value=' + data.semuaprovinsi[i].id + '>' + data.semuaprovinsi[i].nama + '</option>';
        }
        $('.provinsi').html(html);
      }
    });
  });
  $('.provinsi').change(function (ev) {
    $('.formkab').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/' + id + '/kabupaten',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.kabupatens.length; i++) {
          html += '<option value=' + data.kabupatens[i].id + '>' + data.kabupatens[i].nama + '</option>';
        }
        $('.kabupaten').html(html);
      }
    });
  })
  $('.kabupaten').change(function (ev) {
    $('.formkec').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/' + id + '/kecamatan',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.kecamatans.length; i++) {
          html += '<option value=' + data.kecamatans[i].id + '>' + data.kecamatans[i].nama + '</option>';
        }
        $('.kecamatan').html(html);
      }
    });
  })
  $('.kecamatan').change(function (ev) {
    $('.formkel').removeClass('d-none');
    var id = $(this).val();
    $.ajax({
      type: "GET",
      url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/kecamatan/' + id + '/desa',
      dataType: "JSON",
      success: function (data) {
        var html = '';
        var i;
        for (i = 0; i < data.desas.length; i++) {
          html += '<option value=' + data.desas[i].id + '>' + data.desas[i].nama + '</option>';
        }
        $('.kelurahan').html(html);
      }
    });
  })

});