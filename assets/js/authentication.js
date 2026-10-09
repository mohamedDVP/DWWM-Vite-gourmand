function initAuthentication() {
    const registerTab = document.getElementById('tab-register');
    const registerSection = document.getElementById('inscription');
    const loginTab = document.getElementById('tab-login');
    const loginSection = document.getElementById('connexion');
    const registerPasswordInput = document.getElementById('register-password');
    const passwordConfirmInput = document.getElementById('password-confirm');

    if(registerTab && registerSection && loginTab && loginSection) {
        registerTab.addEventListener('click', function () {
            loginSection.style.display = 'none';
            registerSection.style.display = 'block';
            registerTab.classList.add('active');
            loginTab.classList.remove('active');
        });

        loginTab.addEventListener('click', function () {
            registerSection.style.display = 'none';
            loginSection.style.display = 'block';
            loginTab.classList.add('active');
            registerTab.classList.remove('active');
        });
    }

    if(registerPasswordInput && passwordConfirmInput) {
        function validatePassword() {
            if (registerPasswordInput.value !== passwordConfirmInput.value && passwordConfirmInput.value !== '') {
                passwordConfirmInput.setCustomValidity("Les mots de passe ne correspondent pas.");
            } else {
                passwordConfirmInput.setCustomValidity("");
            }
        }

        registerPasswordInput.addEventListener('input', validatePassword);
        passwordConfirmInput.addEventListener('input', validatePassword);
    }
}


document.addEventListener('turbo:load', initAuthentication);