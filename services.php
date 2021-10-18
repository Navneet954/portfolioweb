<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title></title>
</head>
<body>
<?php  include 'Header.php' ?>

<section>
        <div  data-aos="slide-up" class="mt-1 p-1 bg-primary text-white rounded">
            <h1 class="text-center">Services</h1>
          </div>
            <?php include 'card.php' ?>
           
        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        durration: 3000,
        offset:300
    });
    </script> 
</body>
</html>