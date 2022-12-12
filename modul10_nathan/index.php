<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="row mb-3">
	<div class="col-sm-12"><label class="text-bold">Filer dan cari</label></div>
	<div class="col-sm-3">
    	<div class="form-group form-inline">
        	<label>Mengajar Matakuliah</label>
        	<select name="s_ngajar_matakuliah" id="s_ngajar_matakuliah" class="form-control">
            	<option value=""></option>
            	<option value="Agama Kristen">Agama Kristen</option>
            	<option value="statiska">statiska</option>
			<option value="Management Data & Informasi">Management Data & Informasi</option>
			<option value="Kreativitas & Inovasi">Kreativitas & Inovasi</option>
			<option value="jaringan komunikasi">jaringan komunikasi</option>
			<option value="rekaya perangkat lunak">rekaya perangkat lunak</option>
			<option value="pemrograman Web">pemrograman Web</option>




        	</select>
    	</div>
	</div>
	<div class="col-sm-4">
    	<div class="form-group form-inline">
        	<label>Keyword</label><br>
        	<input type="text" name="s_keyword" id="s_keyword" class="form-control">
    	</div>
	</div>
</div><hr>

<div class="data"></div>

<script>
    $(document).ready(function(){
   	 load_data();
   	 function load_data(ngajar_matakuliah, keyword)
   	 {
   		 $.ajax({
   			 method:"POST",
   			 url:"data.php",
   			 data: {ngajar_matakuliah: ngajar_matakuliah, keyword:keyword},
   			 success:function(hasil)
   			 {
   				 $('.data').html(hasil);
   			 }
   		 });
         }
   	 $('#s_keyword').keyup(function(){
   		 var ngajar_matakuliah = $("#s_ngajar_matakuliah").val();
   		 var keyword = $("#s_keyword").val();
   		 load_data(ngajar_matakuliah, keyword);
   	 });
   	 $('#s_ngajar_matakuliah').change(function(){
   		 var ngajar_matakuliah = $("#s_ngajar_matakuliah").val();
   		 var keyword = $("#s_keyword").val();
   		 load_data(ngajar_matakuliah, keyword);
   	 });
    });
</script>