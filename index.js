$(document).ready(function(){
  // alert("We also offer the party wear lengas at rent");
  
$("#contact_form").on("submit", function(e){
  e.preventDefault();
  
              var name = $("#name").val();
              var phone = $("#phone").val();
              var email = $("#email").val();
              var message = $("#message").val();
              
              if(name == "" || phone == "" || email == "" ||  message == ""){
                  
                          swal({
                                title: "Alert !",
                                text: "Please fill all the details !",
                                icon: "error",
                                button: "oh !",
                              });
              }
              
              else{
              
              $.ajax({
                  url:"submit.php",
                  type: "POST",
                  data: $(this).serialize(),
                  success: function(data){
                          if(data == 1){
                          swal({
                          title: "Thank You!",
                            text: "Our team contact you soon!",
                            icon: "success",
                            button: "Ok !",
                          });
                          }
                                                  
                      $("#name").val("");
                       $("#phone").val("");
                       $("#email").val("");
                       $("#message").val("");
                  }
                  
              });
              }
});
});