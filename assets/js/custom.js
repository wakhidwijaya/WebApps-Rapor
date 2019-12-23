$(document).ready(function () {
	$('#lihatnilai').click(function (ev) {
		ev.preventDefault();

		var kd = $(this).attr('data-kd');
		var kelas = $(this).attr('data-kelas');
		console.log(kd, kelas);
		$.ajax({
			type: "GET",
			url: `${urllihatnilai}/${kd}/${kelas}`, // echo php raiso neng file js
			dataType: "JSON",
			// data: {
			// 	kd: kd,
			// 	kelas: kelas
			// },
			success: function (data) {
				$('#nilai').removeClass('d-none');
				$.each(data, function (idx, val) {
					console.log(val);
					// $('#nilai').('show');
					// $('[name="kobar_edit"]').val(data.barang_kode);
					// $('[name="nabar_edit"]').val(data.barang_nama);
					// $('[name="harga_edit"]').val(data.barang_harga);
					$('#table-nilai').append(val.nama + " " + val.nilai + "<br>");
				});
			}
		});
		return false;
	});

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