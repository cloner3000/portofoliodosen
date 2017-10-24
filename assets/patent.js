
				 $("#form_insert_patent").submit(function(e) { // chapter section
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
								 'type' : 'Patent',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_patent #title').val(),
								 'investors' : $('#form_insert_patent #investors').val(),
								 'pdate' : $('#form_insert_patent #pdate').val(),
								 'poffice' : $('#form_insert_patent #poffice').val(),
                 'pnumber' : $('#form_insert_patent #pnumber').val(),
                 'anumber' : $('#form_insert_patent #anumber').val()
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
