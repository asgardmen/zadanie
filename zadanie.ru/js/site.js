	$("#phone").mask("+7(999) 999-9999");
	$("#email").inputmask("email")
		var field = new Array("name", "email", "phone");
		$("form").submit(function(e) {
			var error=0;
			e.preventDefault();
			$("form").find(":input").each(function() {
				for(var i=0;i<field.length;i++){
					if($(this).attr("name")==field[i]){
						if(!$(this).val()){
							$(this).css('border', 'red 1px solid');
							error=1;
						}
					}
				}
			});
			if(error==0){
				var m_action='php/email.php';
				var m_data=$(this).serialize();
				$.post(m_action, m_data)
					.done(function(data) {
					});
				$("#form_ansver").html('Спасибо! Ваша заявка принята.');
				$("#form_ansver").css('visibility', 'visible');
			}
			else{
				return false;
			};
		})





