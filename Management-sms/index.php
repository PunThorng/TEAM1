<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Form | Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height:100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">
                            <i class="bi bi-person fs-3 p-5 "></i>

                            <p class="fs-5" style="font-family: 'Inter', 'Poppins', sans-serif;">Admin or Staff</p>
                        </h4>

                    </div>

                    <div class="card-body p-4">
                        <form action="./database/backend/process.php" method="POST">

                            <!-- Full Name -->
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-badge"></i>
                                    </span>
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required>
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-telephone"></i>
                                    </span>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                </div>
                            </div>

                            <!-- Button -->
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-save"></i> Submit
                            </button>

                        </form>
                    </div>

                    <div class="card-footer text-center text-muted">
                        <small>© 2026 Restaurant System</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>