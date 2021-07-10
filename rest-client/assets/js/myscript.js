const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
	  title: 'Data mahasiswa',
	  text: 'berhasil ' + flashData,
	  icon: 'success',
	  confirmButtonText: 'OK'
	});
}

// hapus
$('.tombol-hapus').on('click', function(e){
	e.preventDefault();
	const href=$(this).attr('href');
	Swal.fire({
	  title: 'Yakin ingin menghapus?',
	  text: "data tidak dapat dikembalikan lagi!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus data!'
	}).then((result) => {
	  if (result.isConfirmed) {
	    document.location.href=href;
	  }
	});

});