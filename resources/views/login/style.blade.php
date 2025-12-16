<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/image/login.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
        background-color: rgba(255, 255, 255, 0.85);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .login-container:hover {
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
    }

    .login-header {
        background-color: #4e73df;
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
    }

    .login-header h2 {
        margin: 0;
        font-weight: 600;
    }

    .login-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #fff;
    }

    .login-body {
        padding: 30px;
    }

    .form-control {
        border-radius: 5px;
        padding: 12px 15px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }

    .btn-login {
        background-color: #4e73df;
        border: none;
        padding: 12px;
        font-weight: 600;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .btn-login:hover {
        background-color: #3a5fcd;
        transform: translateY(-2px);
    }

    .social-login {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }

    .social-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        transition: all 0.3s;
    }

    .social-btn:hover {
        transform: translateY(-5px);
    }

    .facebook {
        background-color: #3b5998;
    }

    .google {
        background-color: #dd4b39;
    }

    .twitter {
        background-color: #1da1f2;
    }

    .forgot-password {
        text-align: center;
        margin-top: 15px;
    }

    .forgot-password a {
        color: #6c757d;
        text-decoration: none;
        transition: all 0.3s;
    }

    .forgot-password a:hover {
        color: #4e73df;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
    }

    .register-link a {
        color: #4e73df;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
    }

    .register-link a:hover {
        color: #3a5fcd;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadein {
        animation: fadeIn 0.6s ease forwards;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .login-container {
            margin: 20px;
        }

        .login-body {
            padding: 20px;
        }
    }
</style>