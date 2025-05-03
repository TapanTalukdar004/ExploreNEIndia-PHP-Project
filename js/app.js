const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

document.addEventListener('DOMContentLoaded', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const container = document.querySelector(".container"); // Get container again

  if (urlParams.get('signup') === 'success') {
    container.classList.remove("sign-up-mode");
  }
  // Optional: Switch to signup form if there was a signup error
  else if (urlParams.get('form') === 'signup' && urlParams.has('error')) {
     container.classList.add("sign-up-mode");
  }
});