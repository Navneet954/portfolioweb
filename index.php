<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include 'Header.php' ?>
    <div class="container-fluid">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner mt-1">
                <div class="carousel-item active">
                    <img src="images/1.jpg" alt="Los Angeles" class="d-block mx- auto img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/8.png" alt="Chicago" class="d-block mx- auto img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/7.jpg" alt="New York" class="d-block mx-auto img-fluid">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <!-- Slider End  -->
    <!-- About Start -->
    <section>
        <div data-aos="slide-right" class="mt-4 p-1 bg-primary text-white rounded">
            <h1 class="text-center">AboutUs</h1>

        </div>
        <p data-aos="flip-right" class=" fs-1 my-3 p-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Incidunt sequi odio, quo quam enim accusantium soluta voluptatem beatae architecto reprehenderit illum a ea
            reiciendis error fugiat temporibus minus qui necessitatibus? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Amet in odio esse eos, sequi enim exercitationem delectus, dignissimos similique dolor
            vero doloribus veniam debitis non ad alias temporibus nam culpa. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Provident, nostrum quasi laboriosam sint itaque voluptas nesciunt laborum, est hic alias
            neque inventore cupiditate doloremque nihil, iste ratione ipsum adipisci minus? Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Non eaque, architecto accusantium sint, atque quae a quis aspernatur quas qui
            maxime eveniet dignissimos! Itaque nostrum laboriosam, officiis harum veniam maxime? Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Cumque, minima inventore consequuntur delectus consequatur sunt
            distinctio laborum ea fugiat tempore adipisci vitae vel, eaque ab aspernatur quibusdam debitis atque
            perspiciatis.</p>
    </section>
    <!-- About End -->
    <!-- Skills Start -->
    <?php include 'skills.php' ?>
    <!-- Services Start -->
    <section>
        <div data-aos="slide-right" class="mt-4 p-1 bg-primary text-white rounded">
            <h1 class="text-center">Services</h1>
        </div>
        <?php include 'card.php'  ?>
    </section>
    <!-- Services End -->
    <!-- Contact Section Start -->
    <div data-aos="flip-left" class="container bg-dark text-light my-3">
        <h1 class="text-center text-danger"><i class="fas fa-mobile mx-3"></i>Contact Us</h1>
        <form method="POST">
            <label class="my-2 mx-1">First Name</label>&nbsp;
            <span class="text-danger">*</span>
            <input type="text" name="firstName" class="form-control" value="" required />
            <label class="my-2 mx-1">Last Name</label>
            <span class="text-danger">*</span>
            <input type="text" name="lastName" class="form-control" value="" required />
            <label class="my-2 mx-1">Email</label>
            <span class="text-danger">*</span>
            <input type="email" name="email" class="form-control" value="" required />
            <label class="my-2 mx-1">Mobile Number</label>
            <span class="text-danger">*</span>
            <input type="text" name="mobile" value="" class="form-control" required />
            <label class="my-2 mx-1">Address</label>
            <span class="text-danger">*</span>
            <textarea class="form-control" rows="4" name="address" value="" required></textarea>&nbsp;
            <label class="my-2 mx-1">Message</label>
            <textarea class="form-control" value="" rows="4" name="message"></textarea>
            &nbsp;

            <button type="submit" class="btn btn-dark my-3">
                Submit
            </button>
        </form>
    </div>

    <!-- Footer start -->
    <?php include 'footer.php' ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        durration: 6000,
        offset: 300
    });
    </script>

</body>

</html>