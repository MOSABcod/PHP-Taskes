<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://cdn0.vox-cdn.com/hermano/verge/product/image/9377/SQ_vpavic_200807_4133_0107.jpeg',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1',
    'link'=> 'https://www.samsung.com/levant_ar/smartphones/galaxy-note20/specs/'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://imei.org/storage/files/images/3341/preview/infinix-zero-8-1.png',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1',
    'link'=> 'https://www.gsmarena.com/infinix_zero_8-10401.php'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://static.labeb.com/test/images/catalogs/93033/l3dl5pi40yr-w500.jpg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1',
    'link'=> 'https://www.apple.com/iphone/compare/?modelList=iphone-12,iphone-12-pro'
    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://gsmarena.com.in/front/images/product_images/large/94364.jpg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00',
    'link' =>'https://www.gsmarena.com/itel_a48-12497.php'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://images.samsung.com/is/image/samsung/p6pim/bd/sm-g998bzkgbkd/gallery/bd-galaxy-s21-ultra-5g-g988-sm-g998bzkgbkd-456285816?$330_330_JPG$',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00',
    'link'=>'https://www.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php'
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://www.ban-shop.com/wp-content/uploads/2021/09/Samsung-Galaxy-A52.jpg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00',
    'link'=>'https://eshop.orange.jo/en/devices-accessories/mobile-phone/samsung-galaxy-a25-6gb'
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php

echo "<div class = container >";
echo "<div class = row >";

for($i=0;$i<count($phones);$i++){
  echo "<div class='card mt-4 ms-3' style='width: 18rem;'>
  <img src='{$phones[$i]['img_url']}' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>{$phones[$i]['name']}</h5>
    <h6 class='card-title'>{$phones[$i]['rate']}</h6>

    <p class='card-text'>{$phones[$i]['brand']}</p>
    <p class='card-text'>{$phones[$i]['price']}</p>
    <a href='{$phones[$i]['link']}' class='btn btn-primary'>Go somewhere</a>
  </div>
</div>";
}
echo "</div>";
echo "</div>";


?>



<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>