
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("pass");
    var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    if (showPasswordCheckbox.checked) {
        passwordInput.setAttribute("type", "text"); // Hiển thị mật khẩu
    } else {
        passwordInput.setAttribute("type", "password"); // Ẩn mật khẩu
    }
}

