<form enctype="multipart/form-data" action="imagemanipulatorcode.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
	<input type='checkbox' name='checkboxvar[]' value='effect1'>Effect 1<br>
    <input type='checkbox' name='checkboxvar[]' value='effect2'>Effect 2<br>
    <input type='checkbox' name='checkboxvar[]' value='effect3'>Effect 3<br>
	
	<input type='input' name='radius' value=''>Radius
	<input type='input' name='size' value=''>Size

<input type="submit" name="submit" value="Apply" />
</form>