<!-- File: V_Login.php -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Admin Login</h1>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Login Start -->
<div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Admin Page Login</h5>
            <h1>Masuk ke Halaman Admin</h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <form id="loginForm" method="post" class="text-center">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>
                        <span id="loginError" class="text-danger"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->

<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = new FormData(this);

        // Perform the login check
        var username = formData.get('username');
        var password = formData.get('password');

        if (username === 'admin' && password === 'admin') {
            // Redirect to the admin page
            window.location.href = '<?php echo base_url('index.php/C_SaungSunda/admin'); ?>';
        } else {
            // Display error message
            document.getElementById('loginError').textContent = 'Invalid username or password';
        }
    });
</script>
