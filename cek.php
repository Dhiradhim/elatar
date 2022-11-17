<html>
    <head>
        <title>How to dynamically add remove input fields in PHP with Jquery Ajax</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
             .padding_t_b {
                 padding: 3px 0;
             }
        </style>
    </head>
    <body>
       <div class="container">
           <br>
           <h2 align="center">How to dynamically add remove input fields in PHP with Jquery Ajax</h2>
            <br>
            <form name="dynamic_form" id="dynamic_form">
               <div id="dynamic_field_append">
                  <div class="row padding_t_b">
                      <div class="col-md-6 col-md-offset-2">
                        <input type="text" name="name[]" placeholder="Enter your Name" class="form-control">
                      </div>
                      <div class="col-md-4">
                         <button type="button" name="add" id="add_field" class="btn btn-success"> Add More (+) </button>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-12 text-center">
                      <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                  </div>
              </div>
          </form>
       </div>
       <script>
          $(document).ready(function(){ 
               var i = 1;
               $('#add_field').click(function(){  
                   i++;  
                   $('#dynamic_field_append').append('<div class="row padding_t_b" id="row_remove'+i+'"><div class="col-md-6 col-md-offset-2"><input type="text" name="name[]" placeholder="Enter your Name" class="form-control" /></div><div class="col-md-4"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove (X)</button></div></div>');
               });
               $(document).on('click', '.btn_remove', function() {
                   var button_id = $(this).attr("id");
                   $('#row_remove'+button_id+'').remove();
               });
               $('#submit').click(function() {
                   $.ajax({
                       url:"process.php",
                       method:"POST",
                       data:$('#dynamic_form').serialize(),
                       success:function(data) {  
                           alert(data);
                           $('#dynamic_form')[0].reset();
                       }
                   });
               });
        })
;
      </script>
    </body>

</html>