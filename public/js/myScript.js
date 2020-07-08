$(document).ready(function() {

	$('#search').keyup(function() {
		var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
		$('#lista > tbody  > tr').each(function() {
			var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
			if(!~text.indexOf(val)) $(this).hide();
			else $(this).show();
		});
	});
	
	$(".datepicker").datepicker({format: 'yyyy-mm-dd',language: "es",autoclose: true});

	$('.timepicker').timepicker({ 'timeFormat': 'H:i:s', 'step': 60});
	
	$('.btn-remove-modal').click(function() {
        var id,aux,control;
		id = $(this).attr('data-id');
		control = $(this).attr('data-control');
		aux = "./"+control+"/"+id;
        $('#formDelete').attr('action', aux );
     });
	 
	 $('.btn-confirm-modal').click(function() {
        var id,aux,control;
		id = $(this).attr('data-id');
		control = $(this).attr('data-control');
		aux = "./"+control+"/"+id+"/status";
        $('.confirm-link').attr('href', aux );
	 });
	 
	 $('.input-emp').click(function() {
		$('#EmployeemModal').modal('show');
	 });

	 $('.btn-download-emp').click(function() {
		 let id= $(this).attr('data-id');
		 let detail=  $(this).attr('data-detail');
		 $('#employee').val(detail);
		 $('#employee_id').val(id);
		$('#EmployeemModal').modal('hide');
	 });

	 $('.btn-guardar-act').click(function() {
		let id=$('#employee_id').val();
		if(id!=""){
			$("#form").submit();
		} else {
			alert("ingrese empleado");
		}
	});

	$( "#formAddAct" ).submit(function( event ) {
		let id=$('#employee_id').val();
		if(id=="") {
			event.preventDefault();
			alert("ingrese empleado");
		}
	});

	 
	 

	 
});