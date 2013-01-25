$(function()
{

	//document.contact_form.reset();
	/*$("#google_map").hide();

	$("#getDirections a").click(
		function()
		{
			$("#google_map").slideToggle('fast');
			return false;
		}
	);*/
	
	
	$(':input.required').focus(
		function()
		{
			if($(this).attr('value') == 'required')
			{
				$(this).attr('value','');
			}
		}
	);
	
	
	$(':input.required').blur(
		function()
		{
			if($(this).attr('value') == '')
			{
				$(this).attr('value','required');
			}
		}
	);

});