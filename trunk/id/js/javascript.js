/**
 * Anurag Bhandari
 * 29th July 2009
 */

 $(document).ready(function() {
 	/* Convert the input with id 'album_cover' into AJAX uploader */
	new AjaxUpload('album_cover', { action: 'upload.php', 
									onChange: function(file) {$('#loader-2').show();}, 
									onSubmit: function(file, ext) {
										if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
											// extension is not allowed
											alert('Error: invalid file extension');
											// cancel upload
											$('#loader-2').hide();
											return false;
										}
                					}, 
 									onComplete: function(file) {$('#album_cover').val(file); $('#loader-2').hide();}
								  }
					);
	
	/* Show/hide the create new album form when 'New Album' link is clicked */
	$('#new_album').click(function() {
		$('#new_album_form').toggle('fast');
	});
	
	/* Post the entry of the new album into the database, using AJAX, when the form is submitted */
	$('#new_album_form').submit(function() {
		$('#loader-3').show();
		if ($('#album_name').val() != '' && $('#album_artist').val() != '' && /^([0-9]{2}|[0-9]{4})$/.test($('#album_year').val()) && $('#album_cover').val() != '') {
			$.post("create.php", {album_name: $('#album_name').val(), album_artist: $('#album_artist').val(), album_year: $('#album_year').val(), album_cover: $('#album_cover').val()}, function(data){
				$('#create_album_result').html(data).fadeIn('slow');
				$('#loader-3').hide();
			});
		}
		else {
			alert("Please fill in all the details and fill them correctly.\nYear can be only 2 digits or 4 digits long.");
			$('#loader-3').hide();
		}
		return false;
	});
	
	/* Start searching the database, using AJAX, when the user has typed at least 2 characters */
	$('#userinput').keyup(function() {
		if ($(this).val().length >= 1) {
			$('#loader').show();
			$.post("search.php", {searchterm: $('#userinput').val()}, function(data){
				$('#results').html(data);
				$('#loader').hide();
			});
		
		}
		else {
			$('#results').html('');
		}
		return false;
	});
 });
 
 /* Reset all the fields in the create new album form */
 function ResetForm() {
 	// The normal JS way
 	//document.getElementById('album_name').value='';
	//document.getElementById('album_artist').value='';
	//document.getElementById('album_year').value='';
	//document.getElementById('album_cover').value='';
	//document.getElementById('create_album_result').style.display='none';
	
	// The jQuery way
 	$('#album_name').val('');
	$('#album_artist').val('');
	$('#album_year').val('');
	$('#album_cover').val('');
	$('#create_album_result').toggle('slow');
 }
