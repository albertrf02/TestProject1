<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
    integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <title>Kalewi</title>
</head>

<body>
  <div id="content">
    <div id="nav">
      <?php
      include 'head.php';
      ?>
    </div>
    <div class="container">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nunc lacus. Maecenas mollis ultricies
        vulputate. Sed accumsan commodo odio at sagittis. Aliquam imperdiet odio at lectus lobortis, eget consectetur
        lacus congue. Aenean id quam egestas, elementum neque in, vulputate sem. Vestibulum vehicula sed leo ac
        efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac ex eu nibh luctus pulvinar.
        Aliquam urna odio, ornare id odio at, dignissim sagittis turpis.
      </p>
      <p>
        Mauris elementum sagittis scelerisque. Pellentesque nec condimentum ante. Pellentesque habitant morbi tristique
        senectus et netus et malesuada fames ac turpis egestas. Ut quis elit cursus, porttitor dui vel, facilisis eros.
        Nunc non suscipit quam. Cras euismod justo id risus ullamcorper, sit amet blandit dolor accumsan. Nulla pharetra
        nisl molestie erat gravida facilisis.
      <p>
      </p>
      Etiam tincidunt orci blandit quam cursus sollicitudin. Maecenas in magna ut nulla lobortis sollicitudin. Sed
      congue leo non ante molestie sagittis. Aliquam erat volutpat. Quisque gravida hendrerit molestie. Praesent
      venenatis tempus magna a laoreet. Nulla facilisi. Curabitur lacinia lobortis ligula, sit amet vulputate sapien
      lobortis ac.
      </p>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="\img\36729910553_30e2f74d6f_k.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="\img\49639837947_bb98d51e39_k.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="\img\341237419038_4723e12a_m.jpg  " class="d-block w-100" alt="...">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</body>


</html>