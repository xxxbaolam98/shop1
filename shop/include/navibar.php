<?php
$type_sql = "SELECT * from type_products";
$typequery = mysqli_query($db,$type_sql);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php?">Mobileshop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?
">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php while($name = mysqli_fetch_assoc($typequery)) : ?>
         <a class="dropdown-item" href="index.php?page=productbrand&IDtype=<?=$name['id'];?>"> <?php echo $name['name']; ?></a>
         <?php endwhile; ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=contact
">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?page=login
">Log In  </a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="index.php?page=signup
">Sign Up  </a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="index.php?page=news">News</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?page=cart
">Cart  </a>
      </li>
    </ul>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div>   <img src="image/banner.jpg" width="100%" height="150px">
</div>