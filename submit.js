function SubmitFormData() {
    var path = $("#path").val();
    $.post("runPython.php", { spath : path },
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
}