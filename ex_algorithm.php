	$('#delete').click(function(){
                   var dataArr = new Array();
                  if($('input:checkbox:checked').length > 0){
                      $('input:checkbox:checked').each(function(){
                      	dataArr.push($(this).attr('homid'));
                      	$(this).closest('tr').remove();
                      });
                        sendResponse(dataArr);
                  }else{
                  	alert('no records selected..');
                  }
              });


                function sendResponse(dataArr){
                      $.ajax({
                          type   :  'post',
                          url    :  'function.php',
                          data   :  {'data' : dataArr},
                          success :   function(response){
                          	          alert(response);
                                    },
                          error    : function(errResponse){
                          	         alert(errResponse);
                          }
                      });
                }