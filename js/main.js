$(function() {
	$("#FormAbide")
		.on('invalid.fndtn.abide', function () {
			// intentionally empty
		})

		.on('valid.fndtn.abide', function () {
			if ($('#legalCheckbox').is(':checked'))
			{
				// Checkbox checked
							
				// Ajax petition
				$.ajax({
					type: "POST",
					url: "framework/forms/comunidadFormValidation.php",
					data: { name: $("#InputName").val(), surName: $("#InputSurName").val(), email: $("#InputEmail").val(), tel: $("#InputTel").val(), adress: $("#InputAdress").val(), country: $("#InputCountry").val(),
						comercial: $("#InputComercial").val(), comment: $("#InputComment").html(), web: $("#InputWeb").val(), facebook: $("#InputFacebook").val(), linkedin: $("#InputLinkedin").val(),
						twitter: $("#InputTwitter").val(), segment: $("#InputSegment").val(), code: $("#InputCode").val(), publi: $('input[name=publi]:checked').val(), clause: $('#clauseCheckbox').is(':checked'), legal: 1, submit: 1 }
				})
					.done(function( data ) {
						// alert(data);
					});
				// End Ajax petition

				// Load second part of the form
				window.location.href = "comunidad-apuntate2.php";
			}
			else
			{
				// Checkbox not checked
			}
		});


		$("#publiForm")
		.on('invalid.fndtn.abide', function () {
			// intentionally empty
		})

		.on('valid.fndtn.abide', function () {
			if ($('#legalCheckbox').is(':checked'))
			{
				// Checkbox checked
							
				// Ajax petition
				$.ajax({
					type: "POST",
					url: "framework/forms/publiFormValidation.php",
					data: { name: $("#InputName").val(), surName: $("#InputSurName").val(), email: $("#InputEmail").val(), tel: $("#InputTel").val(), adress: $("#InputAdress").val(), country: $("#InputCountry").val(),
						comercial: $("#InputComercial").val(), comment: $("#InputComment").html(), web: $("#InputWeb").val(), facebook: $("#InputFacebook").val(), linkedin: $("#InputLinkedin").val(),
						twitter: $("#InputTwitter").val(), segment: $("#InputSegment").val(), code: $("#InputCode").val(), publi: $('input[name=publi]:checked').val(), clause: $('#clauseCheckbox').is(':checked'), legal: 1, submit: 1 }
				})
					.done(function( data ) {
						// alert(data);
					});
				// End Ajax petition

				// Load second part of the form
				window.location.href = "comunidad-apuntate2.php";
			}
			else
			{
				// Checkbox not checked
			}
		});

		$("#redesForm")
		.on('invalid.fndtn.abide', function () {
			// intentionally empty
		})

		.on('valid.fndtn.abide', function () {
			if ($('#legalCheckbox').is(':checked'))
			{
				// Checkbox checked
							
				// Ajax petition
				$.ajax({
					type: "POST",
					url: "framework/forms/redesFormValidation.php",
					data: { name: $("#InputName").val(), surName: $("#InputSurName").val(), email: $("#InputEmail").val(), tel: $("#InputTel").val(), adress: $("#InputAdress").val(), country: $("#InputCountry").val(),
						comercial: $("#InputComercial").val(), comment: $("#InputComment").html(), web: $("#InputWeb").val(), facebook: $("#InputFacebook").val(), linkedin: $("#InputLinkedin").val(),
						twitter: $("#InputTwitter").val(), segment: $("#InputSegment").val(), code: $("#InputCode").val(), publi: $('input[name=publi]:checked').val(), clause: $('#clauseCheckbox').is(':checked'), legal: 1, submit: 1 }
				})
					.done(function( data ) {
						// alert(data);
					});
				// End Ajax petition

				// Load second part of the form
				window.location.href = "comunidad-apuntate2.php";
			}
			else
			{
				// Checkbox not checked
			}
		});
});