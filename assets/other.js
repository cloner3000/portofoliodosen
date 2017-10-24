
				 $("#form_insert_other").submit(function(e) {  //journal Section
					 e.preventDefault();
					 swal({
							 title: "Confirm Navigation",
							 text: "Are you sure want to save this article ?",
							 type: "info",
							 showCancelButton: true,
							 closeOnConfirm: false,
							 confirmButtonText: "Yes !",
							 confirmButtonColor: "#59c2e6"
						 },  function() {
						 $.ajax({
							 url: 'insert_article.php',
							 type:'post',
							 data : {
								 'type' : 'Other',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_other #title').val(),
								 'authors' : $('#form_insert_other #authors').val(),
								 'pdate' : $('#form_insert_other #pdate').val(),
								 'source' : $('#form_insert_other #source').val(),
								 'rnumber' : $('#form_insert_other #rnumber').val()
							 },
							 success : function(r){

								if(r =='1'){
										swal("Done!", "Data saved successfully", "success");
								}else {
										swal("Oops!", "Something went wrong", "error");
								}
							 }
						 });
			 	 });
				 });
