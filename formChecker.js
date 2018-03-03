function validate() {
	let pwd = document.getElementById("password").value;
	let usr = document.getElementById("username").value;
	let h = document.getElementById("helmet").value;
	let g = document.getElementById("gloves").value;
	let j = document.getElementById("jacket").value;
	let validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;				//Pulled from W3Resource.com (email validation)
	if (usr==""){
		alert("Please enter a valid email username ending in .com .net or .me");
	}
	else if (pwd==""){
		alert("Please enter a password");
	}
	else if (!(usr.match(validEmail))){
		alert("Please input a valid email ending in .com .net or .me");
	}
	
	else if (h==0 && g==0 && j==0){
		alert("Please select at least one item to add to the cart");
	}
		
	else if (document.getElementById("shipping1").checked || document.getElementById("shipping2").checked || document.getElementById("shipping3").checked){
		document.getElementById("Submit").style.display = "inline-block";
		document.getElementById("submitMessage").style.display = "inline-block";
		document.getElementById("itemList").style.display = "none";
		document.getElementById("Validate").style.display = "none";
		document.getElementById("userpassText").style.visibility = "hidden";
		document.getElementById("shippingMenu").style.visibility = "hidden";
	}
	else {
		alert("Please choose a shipping method");
	}	
}

