// script.js

document.addEventListener('DOMContentLoaded', function () {
    // Validação do formulário de login
    const loginForm = document.getElementById('login-form');
    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = loginForm.name.value.trim();
        const password = loginForm.password.value.trim();

        if (!name || !password) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        // Aqui você pode adicionar a lógica de autenticação
        console.log('Nome:', name);
        console.log('Senha:', password);
        alert('Login realizado com sucesso!');
    });

    // Validação do formulário de cadastro
    const registerForm = document.getElementById('register-form');
    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = registerForm.name.value.trim();
        const email = registerForm.email.value.trim();
        const username = registerForm.username.value.trim();
        const password = registerForm.password.value.trim();
        const confirmPassword = registerForm['confirm-password'].value.trim();

        if (!name || !email || !username || !password || !confirmPassword) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        if (password !== confirmPassword) {
            alert('As senhas não coincidem.');
            return;
        }

        // Aqui você pode adicionar a lógica de cadastro
        console.log('Nome:', name);
        console.log('E-mail:', email);
        console.log('Usuário:', username);
        console.log('Senha:', password);
        alert('Cadastro realizado com sucesso!');
    });
});
