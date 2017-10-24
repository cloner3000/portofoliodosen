displaydataarticle();
        function displaydataarticle(){

                $.ajax({
                  url : "data_article.php",
                  type :"get",
                  data: {
                    'nip' :  $('#nip').text()
                  },
                  success:function (s){
                  $('.displaydataarticle').html(s);

                  }
                });
            }
            $('tbody').delegate('.deletearticle','click',function(){
                      var value = $(this).data('id');

                       swal({
                         title: "Konfimasi",
                         text: "Apakah anda yakin ingin menghapus data ini ?",
                         type: "warning",
                         showCancelButton: true,
                         closeOnConfirm: false,
                         confirmButtonText: "Ya, Hapus !",
                         confirmButtonColor: "#ec6c62"
                       }, function() {
                         $.ajaxSetup({
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                     })
                         $.ajax({
                           type:'post',
                           url :'delete-article.php',
                           data : {
                             'id' :value
                           },
                           success:function(data){
                             if(data =='1'){
                               swal("Deleted!", "Data Berhasil di hapus", "success");
                               displaydataarticle();
                             }else {
	                              swal("Oops!", "Something went wrong", "error");
                             }

                           }


                         });
                       });

                  });

				 $("#form_insert_journal").submit(function(e) {  //journal Section
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
								 'type' : 'Journal',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_journal #title').val(),
								 'authors' : $('#form_insert_journal #authors').val(),
								 'pdate' : $('#form_insert_journal #pdate').val(),
								 'journal' : $('#form_insert_journal #journal').val(),
								 'volume' : $('#form_insert_journal #volume').val(),
								 'issue' : $('#form_insert_journal #issue').val(),
								 'pages' : $('#form_insert_journal #pages').val(),
								 'publisher' : $('#form_insert_journal #publisher').val()
							 },
							 success : function(r){

								if(r =='1'){
										swal("Done!", "Data saved successfully", "success");

													displaydataarticle();
								}else {
										swal("Oops!", "Something went wrong", "error");
								}
							 }
						 });
			 	 });
				 });





         				 $("#form_insert_book").submit(function(e) { // chapter section
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
         								 'type' : 'Book',
         								 'nip' : $('#nip').text(),
         								 'title' :	$('#form_insert_book #title').val(),
         								 'authors' : $('#form_insert_book #authors').val(),
         								 'pdate' : $('#form_insert_book #pdate').val(),
         								 'volume' : $('#form_insert_book #volume').val(),
         								 'pages' : $('#form_insert_book #pages').val()
         							 },
         							 success : function(r){

         								if(r =='1'){
         										swal("Done!", "Data saved successfully", "success");
                            displaydataarticle();
         								}else {
         										swal("Oops!", "Something went wrong", "error");
         								}
         							 }
         						 });
         				 });
         					 });



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
                                      displaydataarticle();
                   								}else {
                   										swal("Oops!", "Something went wrong", "error");
                   								}
                   							 }
                   						 });
                   				 });
                   					 });


                             $("#form_insert_conference").submit(function(e) { // conference section
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
                                     'type' : 'Conference',
                                     'nip' : $('#nip').text(),
                                     'title' :	$('#form_insert_conference #title').val(),
                                     'authors' : $('#form_insert_conference #authors').val(),
                                     'pdate' : $('#form_insert_conference #pdate').val(),
                                     'conference' : $('#form_insert_conference #conference').val(),
                                     'volume' : $('#form_insert_conference #volume').val(),
                                     'issue' : $('#form_insert_conference #issue').val(),
                                     'pages' : $('#form_insert_conference #pages').val()
                                   },
                                   success : function(r){

                                    if(r =='1'){
                                        swal("Done!", "Data saved successfully", "success");
                                        displaydataarticle();
                                    }else {
                                        swal("Oops!", "Something went wrong", "error");
                                    }
                                   }
                                 });
                             });
                             });



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
                                                displaydataarticle();
                             								}else {
                             										swal("Oops!", "Something went wrong", "error");
                             								}
                             							 }
                             						 });
                             				 });
                             					 });


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
                                                          displaydataarticle();
                                       								}else {
                                       										swal("Oops!", "Something went wrong", "error");
                                       								}
                                       							 }
                                       						 });
                                       			 	 });
                                       				 });



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
                                                                  displaydataarticle();
                                               								}else {
                                               										swal("Oops!", "Something went wrong", "error");
                                               								}
                                               							 }
                                               						 });
                                               				 });
                                               					 });



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
                                                                            displaydataarticle();
                                                         								}else {
                                                         										swal("Oops!", "Something went wrong", "error");
                                                         								}
                                                         							 }
                                                         						 });
                                                         				 });
                                                         					 });
