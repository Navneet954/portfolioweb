<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>s
<body>
    <?php include 'Header.php' ?>
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
            <input type="email" name="email" name="email" class="form-control" value="" required />
            <label class="my-2 mx-1">Mobile Number</label>
            <span class="text-danger">*</span>
            <input type="text" name="mobile" value="" class="form-control" required />
            <label class="my-2 mx-1">Address</label>
            <span class="text-danger">*</span>
            <textarea class="form-control" rows="4" name="address" value="" required></textarea>&nbsp;
            <label class="my-2 mx-1">Message</label>
            <textarea class="form-control" value="" rows="4" name="message"></textarea>
            &nbsp;

            <button type="submit" class="btn btn-primary my-3">
                Submit
            </button>
        </form>
</div>     
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
    AOS.init({
        durration: 6000,
        offset: 500
    });
    </script>
</body>

</html>