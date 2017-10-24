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
       }else {
           swal("Oops!", "Something went wrong", "error");
       }
      }
    });
});
});
