
				 $("#form_insert_thesis").submit(function(e) { // chapter section
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
								 'type' : 'Thesis',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_thesis #title').val(),
								 'authors' : $('#form_insert_thesis #authors').val(),
								 'pdate' : $('#form_insert_thesis #pdate').val(),
								 'institution' : $('#form_insert_thesis #institution').val()
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
