<?php 

include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        font-family: "Poppins", sans-serif;
    }

    body {
        background-color: #f8f9fa;
    }

    .card {
        margin-top: 50px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 500px;
    }

    .input-group-text {
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center">Register</h2>
            <div id="register-msg"></div>
            <form id="register-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" autocomplete="off" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" autocomplete="off" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <select class="form-select" id="course" name="course" required>
                        <option value="" disabled selected>Select your course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                        <option value="BSECE">BSECE</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_number" class="form-label">ID Number</label>
                    <input type="number" class="form-control" autocomplete="off" id="id_number" name="id_number"
                        required>
                </div>

                <!-- Password Field with Hide/Unhide Icon -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span class="input-group-text" id="togglePassword">
                            <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                        </span>
                    </div>
                </div>

                <!-- Confirm Password Field with Hide/Unhide Icon -->
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                            required>
                        <span class="input-group-text" id="toggleConfirmPassword">
                            <i class="bi bi-eye-slash" id="toggleConfirmPasswordIcon"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="security_question" class="form-label">Security Question</label>
                    <select class="form-select" id="security_question" name="security_question" required>
                        <option value="" disabled selected>Select a security question</option>
                        <option value="What is your pet's name?">What is your pet's name?</option>
                        <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                        <option value="What is your favorite book?">What is your favorite book?</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

    <!-- Add Bootstrap Icons CDN for eye icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    $(document).ready(function() {
        $('#register-form').submit(function(e) {
            e.preventDefault();

            // Check if passwords match
            const password = $('#password').val();
            const confirmPassword = $('#confirm_password').val();
            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Password Mismatch',
                    text: 'Passwords do not match. Please try again.'
                });
                return;
            }

            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                data: {
                    action: 'register',
                    name: $('#name').val(),
                    username: $('#username').val(),
                    course: $('#course').val(),
                    id_number: $('#id_number').val(),
                    password: password,
                    security_question: $('#security_question').val()
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    if (res.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Registration Successful!',
                            text: res.message,
                            showConfirmButton: true,
                            confirmButtonText: 'Go to Login'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'login.php';
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Registration Failed!',
                            text: res.message
                        });
                    }
                }
            });
        });

        // Toggle password visibility for password field
        $('#togglePassword').click(function() {
            const passwordField = $('#password');
            const icon = $('#togglePasswordIcon');
            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                icon.removeClass('bi-eye-slash').addClass('bi-eye');
            } else {
                passwordField.attr('type', 'password');
                icon.removeClass('bi-eye').addClass('bi-eye-slash');
            }
        });

        // Toggle password visibility for confirm password field
        $('#toggleConfirmPassword').click(function() {
            const confirmPasswordField = $('#confirm_password');
            const icon = $('#toggleConfirmPasswordIcon');
            if (confirmPasswordField.attr('type') === 'password') {
                confirmPasswordField.attr('type', 'text');
                icon.removeClass('bi-eye-slash').addClass('bi-eye');
            } else {
                confirmPasswordField.attr('type', 'password');
                icon.removeClass('bi-eye').addClass('bi-eye-slash');
            }
        });
    });
    </script>

</body>

</html>