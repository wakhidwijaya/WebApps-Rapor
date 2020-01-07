
$(document).ready(function () {
	$('.lihatnilai').click(function (ev) {
		ev.preventDefault();

		var kd = $(this).attr('data-kd');
		// $('#kd_id').val(kd);
		var datakd = $(this).attr('data-namakd');
		var kelas = $(this).attr('data-kelas');
		console.log(kd, kelas);
		$.ajax({
			type: "GET",
			url: `${urllihatnilai}/${kd}/${kelas}`, // echo php raiso neng file js
			dataType: "JSON",
			success : function(data){
				$('#kd').removeClass('d-none');
				$('#kd').html(datakd);
				$('.nilai').removeClass('d-none');
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr>'+
						'<td>'+data[i].nis+'</td>'+
						'<td>'+data[i].nama+'</td>'+
						'<td width="12%">' +
						'<input name="komda" value="'+kd+'" hidden>' +
						'<input name="nilai['+data[i].id_siswa+']" style="width: 100%" type="number" value="'+data[i].nilai+'" max="100"></td>'+
						'</tr>';
				}
				$('.datanilai').html(html);
			}
		});
		return false;
	});

});

$(document).ready(function () {
	var render=createwidgetlokasi("provinsi","kabupaten","kecamatan","kelurahan");
});

$(document).ready(function () {
	// Set the date we're counting down to
	var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
	var x = setInterval(function() {

		// Get today's date and time
		var now = new Date().getTime();

		// Find the distance between now and the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Display the result in the element with id="demo"
		$('#countdown').html(days + " : " + hours + " : " + minutes + " : " + seconds);

		// If the count down is finished, write some text
		if (distance < 0) {
			clearInterval(x);
			$('#countdown').html( "EXPIRED");
		}
	}, 1000);
})

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