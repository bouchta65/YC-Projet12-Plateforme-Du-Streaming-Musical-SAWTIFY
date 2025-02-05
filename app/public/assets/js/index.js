    function showAuthPopup(formType) {
        const popup = document.getElementById('authPopup');
        popup.classList.remove('hidden');
        toggleForm(formType);
    }

    function hideAuthPopup() {
        document.getElementById('authPopup').classList.add('hidden');
    }

    function toggleForm(formType) {
        const loginForm = document.getElementById('loginForm');
        const signupForm = document.getElementById('signupForm');
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');

        if(formType === 'login') {
            loginForm.classList.remove('hidden');
            signupForm.classList.add('hidden');
            loginBtn.classList.add('bg-cyan-500/30', 'border-cyan-500/60');
            signupBtn.classList.remove('bg-purple-500/30', 'border-purple-500/60');
        } else {
            loginForm.classList.add('hidden');
            signupForm.classList.remove('hidden');
            signupBtn.classList.add('bg-purple-500/30', 'border-purple-500/60');
            loginBtn.classList.remove('bg-cyan-500/30', 'border-cyan-500/60');
        }
    }

    document.getElementById('authPopup').addEventListener('click', function(e) {
        if(e.target === this) hideAuthPopup();
    });
