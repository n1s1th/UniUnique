// Form validation logic
document.addEventListener('DOMContentLoaded', function() {
    // Login form validation
    var loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            var isValid = true;

            // Clear previous errors
            clearErrors(['email', 'password']);

            // Email validation
            if (!email.value || !email.value.includes('@')) {
                showError(email, 'Please enter a valid email address');
                isValid = false;
            }

            // Password validation
            if (!password.value) {
                showError(password, 'Please enter your password');
                isValid = false;
            }

            if (!isValid) e.preventDefault();
        });
    }

    // Signup form validation
    var signupForm = document.getElementById('signup-form');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            var fullname = document.getElementById('fullname');
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            var confirmPassword = document.getElementById('confirm-password');
            var isValid = true;

            // Clear previous errors
            clearErrors(['fullname', 'email', 'password', 'confirm-password']);

            // Full name validation
            if (!fullname.value) {
                showError(fullname, 'Please enter your full name');
                isValid = false;
            }

            // Email validation
            if (!email.value || !email.value.includes('@')) {
                showError(email, 'Please enter a valid email address');
                isValid = false;
            }

            // Password validation
            if (!password.value) {
                showError(password, 'Please enter a password');
                isValid = false;
            } else if (password.value.length < 8) {
                showError(password, 'Password must be at least 8 characters');
                isValid = false;
            }

            // Confirm password validation
            if (!confirmPassword.value) {
                showError(confirmPassword, 'Please confirm your password');
                isValid = false;
            } else if (password.value !== confirmPassword.value) {
                showError(confirmPassword, 'Passwords do not match');
                isValid = false;
            }

            if (!isValid) e.preventDefault();
        });
    }

    function showError(input, message) {
        var parent = input.parentNode;
        var error = document.createElement('span');
        error.className = 'error-message';
        error.textContent = message;
        parent.appendChild(error);
    }

    function clearErrors(ids) {
        ids.forEach(function(id) {
            var input = document.getElementById(id);
            if (input) {
                var parent = input.parentNode;
                var error = parent.querySelector('.error-message');
                if (error) parent.removeChild(error);
            }
        });
    }
});
