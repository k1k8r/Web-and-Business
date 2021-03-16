function validate() {
	var userName = document.getElementById("username");
	var userPhone = document.getElementById("userPhone");
	var docNum = document.getElementById("docNum");
	var mounthCount = document.getElementById("mounthCount");
	var kreditAmount = document.getElementById("kreditAmount");
	var userAddres = document.getElementById("userAddres");
	var userDoc = document.getElementById("userDoc");
	var kreditGoal = document.getElementById("kreditGoal");
	var userWage = document.getElementById("userWage");
	var kreditPercent = document.getElementById("kreditPercent");

	if (userName.value.trim() == "" || userPhone.value.trim() == "" || docNum.value.trim() == "" || mounthCount.value.trim() == "" || kreditAmount.value.trim() == "" || userAddres.value.trim() == "" || userDoc.value.trim() == "" || kreditGoal.value.trim() == "" || userWage.value.trim() == "" || kreditPercent.value.trim() == "") {
		return false;
	} else {
		return true;
	}

}