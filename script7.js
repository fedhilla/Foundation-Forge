document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    var email = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;

    if (email == "" || pwd == "") {
      alert("Email dan password harus diisi.");
      event.preventDefault();
    }
  });
