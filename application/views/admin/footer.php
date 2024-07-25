</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#table-datatable").dataTable();
	});
	$('.alert-message').alert().delay(3000).slideUp('slow');

function search() {
  // Mendapatkan nilai input dari search bar
  var searchInput = document.getElementById("searchInput").value;

  // Lakukan proses pencarian atau tampilkan pesan pencarian
  if (searchInput) {
    // Lakukan pencarian menggunakan nilai searchInput
    // ...

    // Menampilkan hasil pencarian
    document.getElementById("searchResults").innerHTML = "Hasil pencarian: " + searchInput;
  } else {
    // Menampilkan pesan jika search bar kosong
    document.getElementById("searchResults").innerHTML = "Mohon masukkan kata kunci pencarian.";
  }
}


</script>

</body>
</html>