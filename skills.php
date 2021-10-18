<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animated Skills Bar </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 data-aos="flip-left" class="text-center bg-info text-dark">Our Skills</h1>
  <div class="container-fluid">
  <div data-aos="fade-down" class="skill-bars">
  <div class="skill-bars">
    <div class="bar">
      <div class="info">
        <span>HTML</span>
      </div>
      <div class="progress-line html">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>CSS</span>
      </div>
      <div class="progress-line css">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>jQuery</span>
      </div>
      <div class="progress-line jquery">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Bootstrap</span>
      </div>
      <div class="progress-line Bootstrap">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>JavaScript</span>
      </div>
      <div class="progress-line JavaScript">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>PHP</span>
      </div>
      <div class="progress-line php">
        <span></span>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        durration: 6000,
        offset:300,
        deley:1s
    });
    </script>  
      
</body>
</html>