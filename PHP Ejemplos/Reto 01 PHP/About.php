<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
<?php $dondeEstamos="About" ?>
<ul>
  <li>
    <a class="<?php if ($dondeEstamos=="home") {echo "active";} ?>" href="inicio.php">Home</a>
  </li>

  <li>
    <a class="<?php if ($dondeEstamos=="news") {echo "active";} ?>" href="news.php">News</a>
  </li>

  <li>
    <a class="<?php if ($dondeEstamos=="Contact") {echo "active";} ?>" href="Contact.php">Contact</a>
  </li>
  <li>
    <a class="<?php if ($dondeEstamos=="About") {echo "active";} ?>" href="About.php">About</a>
</li>
</ul>

</body>
</html>
