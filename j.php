<?php include('db_connect.php') 
?>
<script type="text/javascript">
		$(document).ready(function(){

$('#add_payroll').click(function(){
				start_load()
				$.ajax({
					url:'ajax.php?action=add_payroll',
					method:"POST",
					data:{id:'<?php echo $_GET['id'] ?>'},
					error:err=>console.log(err),
					success:function(resp){
							if(resp == 1){
                                $to = 'yalladivya101@gamil.com'; 
                                $subject = 'Salary Credited';
                                $message = 'Dear Employee, your salary has been credited to your account.';
                                $headers = 'From:jayanthiyalla141@gmail.com '; 

// Send the email
                                $mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
                                if ($mailSent) {
                                     echo 'Email sent successfully.';
                                } else {
                                     echo 'Email could not be sent.';
                                }
								

								},1000)
							}
						
				        })
			})
		});
</script>