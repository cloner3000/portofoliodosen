
				 $("#form_insert_chapter").submit(function(e) { // chapter section
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
								 'type' : 'Chapter',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_chapter #title').val(),
								 'authors' : $('#form_insert_chapter #authors').val(),
								 'pdate' : $('#form_insert_chapter #pdate').val(),
								 'book' : $('#form_insert_chapter #book').val(),
								 'volume' : $('#form_insert_chapter #volume').val(),
								 'pages' : $('#form_insert_chapter #pages').val(),
								 'publisher' : $('#form_insert_chapter #publisher').val()
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
