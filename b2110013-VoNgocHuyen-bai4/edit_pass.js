
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("new_pass");
    var passwordInput1= document.getElementById("again_pass");
    var passwordInput2= document.getElementById("old_pass");

    var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    if (showPasswordCheckbox.checked) {
        passwordInput.setAttribute("type", "text"); // Hiển thị mật khẩu
        passwordInput1.setAttribute("type", "text"); // Hiển thị mật khẩu
        passwordInput2.setAttribute("type", "text");
         // Hiển thị mật khẩu
    } else {
        passwordInput.setAttribute("type", "password"); // Ẩn mật khẩu
        passwordInput1.setAttribute("type", "password"); // Ẩn mật khẩu
        passwordInput2.setAttribute("type", "password"); // Ẩn mật khẩu
    }
}

