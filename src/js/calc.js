$(document).ready(function () {
	$('#clear').click(function () {
		$('.calc-block__result').removeClass('active');
		$('.calc-block__result').html('');
	});

	$('#get').click(function () {
		console.log()
		$('.calc-block__result').addClass('active');
		$(".calc-block__result").html('');
		var userWage = Number($("#userWage").val());
		$("#userWage").val("");
		var mounthCount = Number($("#mounthCount").val());
		$("#mounthCount").val("");
		var kreditAmount = Number($("#kreditAmount").val());
		$("#kreditAmount").val("")
		var kreditPercent = Number($("#kreditPercent").val());
		$("#kreditPercent").val("");
		var firstMessage = "Сумма займа: <strong>" + kreditAmount + " рублей</strong><br>Годовой процент: <strong>" + kreditPercent + "%</strong><br>Срок займа: <strong>" + mounthCount + " месяцев</strong><br>";
		$(".calc-block__result").html(firstMessage);
		var mrot = 12130;
		var condition = mounthPayment + mrot * 1.5;
		var mounthKreditPercent = kreditPercent / 100 / 12
		var mounthPayment = kreditAmount * (mounthKreditPercent + ((mounthKreditPercent) / ((1 + mounthKreditPercent) ** mounthCount - 1)));
		var isAgree = 'Кредит одобрен';
		var isNotAgree = 'Кредит не одобрен';
		if (mounthPayment <= condition) {
			$(".calc-block__result").html($(".calc-block__result").html() + isNotAgree);
		} else {
			$(".calc-block__result").html($(".calc-block__result").html() + isAgree);
		}
	});
});
