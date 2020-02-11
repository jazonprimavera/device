<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://devicedata.herokuapp.com//rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("device");
?>

 <h1>Books</h1>

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
                  <li>cost: $cost </li>
                  <li>year released: $year </li>
                  <li>color: $color </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
