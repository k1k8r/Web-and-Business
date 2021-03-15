$(document).ready(function () {
	$('#clear').click(function () {
		$('.calc-block__result').removeClass('active');
		$('.calc-block__result').html('');
	});

	$('#get').click(function () {
		$('.calc-block__result').addClass('active');
		$(".calc-block__result").html('');
		var userWage = Number($("#userWage").val());
		$("#userWage").val("");
		var kreditValue = Number($("#kreditValue").val());
		$("#kreditValue").val("")
		var mounthCount = Number($("#mounthCount").val());
		$("#mounthCount").val("");
		var userRegion = Number($("#userRegion").val());
		$("#userRegion").val("");
		var kreditGoal = Number($("#kreditGoal").val());
		$("#kreditGoal").val("")
		var kreditrate = Number($("#kreditRate").val());
		$("#kreditRate").val("");
	});
});
