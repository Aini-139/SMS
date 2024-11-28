<?php include("header.php") ?>

<section class="bg-light vh-100 d-flex">
    <div class="col-4 m-auto">
        <div class="card shadow-lg border-0 rounded-4" style="background: linear-gradient(to bottom right, #FF7043, #7E57C2);">
            <div class="card-body text-center">
                <!-- Icon -->
                <div class="border rounded-circle mx-auto d-flex" style="width: 80px; height: 80px; background-color: #FF7043;">
                    <i class="fa fa-user prefix fa-3x m-auto" style="color: white;"></i>
                </div><br>

                <h3 class="text-white mb-4"> Login</h3>

                <!-- Login Form -->
                <form action="actions/login.php" method="POST">
                    <!-- Material Input Fields -->
                    <div class="md-form position-relative mb-4">
                        <i class="fa fa-envelope input-icon"></i>
                        <input type="text" id="email" name="email" class="form-control input-field" placeholder="Your Email" required>
                    </div>

                    <div class="md-form position-relative mb-4">
                        <i class="fa fa-lock input-icon"></i>
                        <input type="password" id="password" name="password" class="form-control input-field" placeholder="Your Password" required>
                    </div>

                    <button type="submit" name="login" class="btn btn-custom btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>
<style>
/* General Body Background */
.bg-light {
    background-color: #ffffff !important; /* White background */
} 

/* Card Style */
.card {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    background: linear-gradient(to bottom right, #ffffff, #D1C4E9); /* White to Light Purple gradient */
}

/* Input Fields */
.input-field {
    padding-left: 40px;
    border-radius: 30px;
    background-color: #f5f5f5;
    border: none;
    transition: all 0.3s ease;
    height: 45px;
}

.input-field:focus {
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 5px rgba(126, 87, 194, 0.8);
}

/* Input Icons */
.input-icon {
    position: absolute;
    left: 15px;
    top: 12px;
    color: #888;
}

/* Button Style */
.btn-custom {
    background-color: #FF7043; /* Light Orange */
    color: white;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 12px;
    border: none;
    transition: background-color 0.3s, transform 0.2s;
}

.btn-custom:hover {
    background-color: skyblue; /* Darker Orange */
    cursor: pointer;
    transform: translateY(-3px);
}

.btn-custom:active {
    transform: translateY(1px);
}

/* Heading Style */
h3 {
    font-family: 'Arial', sans-serif;
    font-weight: 600;
    color: white;
}

/* Card Body */
.card-body {
    padding: 40px;
    background-color: transparent;
}

/* Center Form */
.col-4 {
    width: 30%;
}

/* Media Queries */
@media (max-width: 768px) {
    .col-4 {
        width: 80%;
    }
}
</style>