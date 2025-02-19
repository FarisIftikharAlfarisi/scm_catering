<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Service</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://niceadmin.com/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Catering Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center" style="background-image: url('https://source.unsplash.com/1600x900/?catering'); background-size: cover; color: white;">
        <div class="container">
            <h1 class="display-4">Welcome to Our Catering Service</h1>
            <p class="lead">Delicious food for every occasion</p>
            <a href="#services" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </header>

    <section id="services" class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?food" class="card-img-top" alt="Food">
                    <div class="card-body">
                        <h5 class="card-title">Event Catering</h5>
                        <p class="card-text">We provide catering services for all types of events, big or small.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?buffet" class="card-img-top" alt="Buffet">
                    <div class="card-body">
                        <h5 class="card-title">Buffet Service</h5>
                        <p class="card-text">Enjoy a wide variety of dishes with our buffet service.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?dessert" class="card-img-top" alt="Dessert">
                    <div class="card-body">
                        <h5 class="card-title">Dessert Catering</h5>
                        <p class="card-text">Indulge in our delicious desserts, perfect for any occasion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="container-fluid bg-light py-5 mt-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="https://source.unsplash.com/100x100/?portrait" class="rounded-circle mb-3" alt="Client">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"The catering service was exceptional! The food was delicious and the presentation was beautiful. Highly recommended!"</p>
                            <div class="text-warning">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="https://source.unsplash.com/101x101/?portrait" class="rounded-circle mb-3" alt="Client">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">"They catered my wedding and everything was perfect. The staff was professional and the food was amazing!"</p>
                            <div class="text-warning">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="https://source.unsplash.com/102x102/?portrait" class="rounded-circle mb-3" alt="Client">
                            <h5 class="card-title">Mike Johnson</h5>
                            <p class="card-text">"Outstanding corporate event catering. The variety and quality of food exceeded our expectations!"</p>
                            <div class="text-warning">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container my-5">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="event">Event Type</label>
                        <select class="form-control" id="event">
                            <option>Wedding</option>
                            <option>Corporate Event</option>
                            <option>Birthday Party</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Our Location</h5>
                        <p class="card-text">
                            <strong>Address:</strong><br>
                            123 Catering Street<br>
                            Foodville, FL 12345<br><br>
                            <strong>Phone:</strong><br>
                            (555) 123-4567<br><br>
                            <strong>Email:</strong><br>
                            info@cateringservice.com
                        </p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.!2d-74!3d40!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM40!4m5!3m4!1s0x0%3A0x0!8m2!3d40!4d-74" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4 mt-5">
        <p>&copy; 2023 Catering Service. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

