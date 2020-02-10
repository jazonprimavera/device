<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://devicedata.herokuapp.com/");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("device");
?>

 <h1>Laptop: acer nitro 5</h1>
 <ul>
<li>cost: 35000</h1>
<li>color: black</li>
</ul>
<h2>Phone: Samsung ROG</h1>
 <ul>
<li>cost: 35000</h1>
<li>color: black</li>
</ul>
<h3>Phone: IPHONE X MAS</h3>
 <ul>
<li>cost: 80000</h1>
<li>color: black</li>
</ul>
<h4>Car: Toyota Hilux</h4>
 <ul>
<li>cost: 2700000</h1>
<li>color: white</li>
</ul>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $brand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
     $cost = $data->getElementsByTagName("cost")->item(0)->nodeValue;
     $year = $data->getElementsByTagName("year")->item(0)->nodeValue;
     $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
 
 echo "<ul>
            <h2>$brand</h2>
              <ul>
                  <li>Cost: $cost </li>
                  <li>Year: $year </li>
                  <li>Album: $color </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>