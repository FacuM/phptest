const ready = () => {
    document.getElementById('tryLoginBtn').addEventListener('click', async () => {
        username = document.getElementById('username');
        password = document.getElementById('password');

        if (username.value.length > 0 && password.value.length > 0) {
            response = await fetch('services/loginUser.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                credentials: 'same-origin',
                body: JSON.stringify({
                    operation: 'tryLogin', 
                    values: {
                        username: username.value,
                        password: password.value
                    }
                })
            });

            response.json().then((response) => {
                username.value = '';
                password.value = '';

                if (response.result != null && response.result.loggedIn) {
                    window.location.href = 'index.php';
                }
            });
        } else {
            statusText = document.getElementById('statusText');

            statusText.innerHTML = 'Los datos que ingresaste no son válidos.';
        }
    });
};

if (document.readyState === 'complete') {
    ready();
} else {
    document.addEventListener('DOMContentLoaded', ready);
}