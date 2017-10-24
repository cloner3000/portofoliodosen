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
       }else {
           swal("Oops!", "Something went wrong", "error");
       }
      }
    });
});
  });
