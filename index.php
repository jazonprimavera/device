<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://devicedata.herokuapp.com/");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("device");
?>

 <h1>Gadget</h1>
<ul>Laptops</ul>
<li>cost: 35000</li>
<li>year: 2020</li>
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
