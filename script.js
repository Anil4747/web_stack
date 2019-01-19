fuction onsignin(googleUser)
{
	var profile=googleUser.getBasicProfile();
	$(".g-signin2").css("display","home");
	$(".data").css("display","block");
	$("#pic").attr('src',profile.getImageUrl());
	$("#email").text(profile.getEmail());
}
