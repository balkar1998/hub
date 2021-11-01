function checktype(that) {
    if (that.value == "1") {
        document.getElementById("referral").style.display = "block";
        document.getElementById("referral-email").style.display = "block";
    } else {
        document.getElementById("referral").style.display = "none";
        document.getElementById("referral-email").style.display = "none";
    }
}