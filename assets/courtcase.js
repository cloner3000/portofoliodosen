
				 $("#form_insert_courtcase").submit(function(e) { // chapter section
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
								 'type' : 'Courtcase',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_courtcase #title').val(),
								 'court' : $('#form_insert_courtcase #court').val(),
								 'pdate' : $('#form_insert_courtcase #ddate').val(),
								 'reporter' : $('#form_insert_courtcase #reporter').val(),
                 'docket' : $('#form_insert_courtcase #docket').val()
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
