<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OGANIKA GROCERS </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Final.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>ORGANIKA GROCERS</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="Search Here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#">home</a>
            <a target="_blank"href="#category">category</a>
            <a target="_blank" href="#product">product</a>
            <a target="_blank" href="#deal">deal</a>
            <a target="_blank" href="#contact">contact</a>
        </nav>
      
        <div class="icons">
            <a target="_blank" href="Login.php" class="fas fa-shopping-cart"></a>
            <a target="_blank" href="Cart.php" class="fas fa-heart"></a>
            <a target="_blank" href="Login.php" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <a href="Vegetables.php">
        <img src="1.png" alt=""></a>
    </div>

    <div class="content">
        <span>fresh and organic</span>
        <h3>your daily need products</h3>
        <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->


<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container">

        <div class="box">
            
            <h3>vegetables</h3>
            <p>upto 50% off</p>
            <img src="2.jpg" alt="">
            <a target="_blank" href="Vegetables.php" class="btn">shop now</a>
        </div>
        
        <div class="box">
            <h3>meat</h3>
            <p>upto 35% off</p><br><br>
            <img src="meat.jpg" alt="">
            <a target="_blank" href="Meat.php" class="btn">shop now</a>
        </div>

        <div class="box">
            <h3>fruits</h3>
            <p>upto 12% off</p><br><br>
            <img src="4.jpg" width="245px" alt=""><br><br>
            <a target="_blank" href="Fruits.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>Dairy Products</h3>
            <p>upto 12% off</p><br><br>
            <img src="images/Milk-Low-Fat-1L-1.png" width="245px" alt=""><br><br>
            <a target="_blank" href="dairy-products.php" class="btn">shop now</a>
        </div>
         
            <div class="box">
            <h3>Cleaning Products</h3>
            <p>upto 25% off</p>
            <img src="5.jpg" width="235px" height="145px" alt="">
            <a target="_blank" href="Cleaning-Products.php" class="btn">shop now</a>
        </div>
          
          <div class="box">
            <h3>Kitchen Accessories</h3>
            <p>upto 45% off</p>
            <img src="6.jpg" alt=""><br><br><br>
            <a target="_blank" href="Kitchen Accessories.php" class="btn">shop now</a>
        </div>

<div class="box">
            <h3>Covid-19</h3>
            <p>upto 35% off</p>
            <img src="50.jpeg" width="305px" height="185px" alt="">
            <a target="_blank" href="Covid-19.php" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- deal section starts  -->

<section class="deal" id="deal">

<div class="image">
        <img src="7.png" height="300px" width="400px" align="right" alt="">
    </div>

    <div class="content">
        
        <h3 class="title">Deal of the day</h3>
        <p>Be it boring Mondays or crisis Wednesdays, make every day of the week fun Friday with the best deals on the internet. Online shopping portals like PayTm Mall and Tata CLiQ provide a lot of options to choose from and in various categories at unbelievable prices!</p>
        
        
<div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
            </div>
        </div>

        

    </div>

</section>

<!-- deal section ends -->

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
           <img src="8.jpg" width="250px" alt="">
            <h3> banana</h3>
           <div class="stars">
      
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.60 <span> Rs.75</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Dozen </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="9.jpg" alt="">
            <h3> tomato</h3>
           <br><br><br>
            <div class="price"> Rs.35 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="10.jpg" width="250px" alt="">
            <h3>Eggs</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.50  </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>


        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="11.jpg"  width="250px"alt="">
            <h3> almonds</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">Rs.705 <span> Rs.850 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-25%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="12.jpg" alt="">
            <h3>Mask</h3>
            <div class="stars">
           
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.60 <span> Rs.90 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /pkt </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>


        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="13.jpg" alt="">
            <h3>Air Wick</h3>
            <br><br><br>
            <div class="price">Rs.45.39 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span>  Pack of 3</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!---Fruits section starts--->

<section class="product" id="product">
<h1 class="heading">Fresh n Juicy <span> Fruits </span></h1>

    <div class="box-container">

        <div class="box">
           <span class="discount">upto-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="36.jpg" alt="">
            <h3>Apples</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.220 <span>Rs.255 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
               <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="37.jpg" alt="">
            <h3>Oranges</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            <div class="price"> Rs.85</div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="46.jpg" alt="">
            <h3>Pineapple</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.140 <span>Rs.156 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="40.jpg" alt="">
            <h3>Strawberries</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.110 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-2%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="39.jpg" alt="">
            <h3>Guava</h3>
            <br><br><br>
            <div class="price"> Rs.75 <span> Rs.80 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="45.jpg" alt="">
            <h3>Grapes</h3>
            <br><br><br>
    <div class="price"> Rs.79<span> Rs.89</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="38.jpg" alt="">
            <h3>Mangoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i> 
                <i class="fas fa-star"></i>
            </div>
            <div class="price">Rs.70 <span> Rs.85.9 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="41.jpg" alt="">
            <h3>Dragon Fruit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                 </div>
            <div class="price"> Rs.55 <span> Rs.62.50 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Piece </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="49.jpg" width="260px"  alt="">
            <h3>Pears</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.118 <span> Rs.122 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
       
        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="43.jpg" alt="">
            <h3>Blue-Berries</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.115 <span> Rs.125 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="44.png" alt="">
            <h3>Bananas</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            <div class="price"> Rs.70 <span> Rs.88 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Dozen </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="47.jpg" alt="">
            <h3>Peaches</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
                
               
            </div>
            <div class="price"> Rs.96 <span> Rs.102 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
          
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="48.jpg" alt="">
            <h3>Plums</h3>
            <div class="stars">
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.112 <span> Rs.125 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            <span class="discount">-15%</span>
            <div class="icons">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="42.jpg" alt="">
            <h3>Cherries</h3>
            <div class="stars">
                
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.94 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

    </div>
</section>
<!---Fruits section ends--->


<!---Fresh Vegetables section starts--->
<section class="product" id="product">
<h1 class="heading">Fresh <span> Vegetables</span></h1>

    <div class="box-container">

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v1.jpg" alt="">
            <h3>Potato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.50 <span>Rs.55 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">upto-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v2.png" alt="">
            <h3>Onion</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.45<span> Rs.60</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v3.png" alt="">
            <h3>Lady Finger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.40 <span>Rs.42 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v5.png" alt="">
            <h3>Mushrooms</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.95<span> Rs.110</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /250 gram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v6.jpg" alt="">
            <h3>Green Cauliflower</h3>
            <br><br><br>
            <div class="price"> Rs.25 <span> Rs.30 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v7.png" alt="">
            <h3>Pointed Gourd</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.75<span> Rs.89</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v8.png" alt="">
            <h3>Cabbage</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
            </div>
            <div class="price">Rs.35 <span> Rs.39 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v9.png" alt="">
            <h3>Bell Pepper</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.20 <span> Rs.22 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Piece </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            <span class="discount">-45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="9.jpg" width="260px"  alt="">
            <h3>Tomato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.48 <span> Rs.54 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /250 gram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
       
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v12.png" alt="">
            <h3>Pumpkin</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.15 <span> Rs.22 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /piece </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v13.png" alt="">
            <h3>Peas</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            <div class="price"> Rs.56 <span> Rs.68 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v14.png" alt="">
            <h3>Beetroot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
               
            </div>
            <div class="price"> Rs.66 <span> Rs.72 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
          
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v15.png" alt="">
            <h3>Bottle Gourd</h3>
            <div class="stars">
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.22 <span> Rs.25 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
        <div class="box">
            <span class="discount">-15%</span>
            <div class="icons">

                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="v16.png" alt="">
            <h3>Garlic</h3>
            <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.54 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

    </div>
</section>
<!---Fresh Vegetables section ends--->


<!----Meat section starts--->
<section class="product" id="product">

    <h1 class="heading">Meat</h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">upto-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m2.jpg" alt="">
            <h3> Fish</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            <div class="price"> Rs.55 <span>  Rs.65 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 500gram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        
        

        <div class="box">
            <span class="discount">-15%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m5.jpg" alt="">
            <h3>Bacon</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.79 <span>  Rs.86 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /gram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m4.jpg" alt="">
            <h3>Chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.90 <span>  Rs.105 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m6.png" alt="">
            <h3>Mutton</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
            </div>
            <div class="price">  Rs.80 <span>  Rs.85 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kilogram </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-35%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m3.jpeg" alt="">
            <h3> Prawns</h3>
            <div class="stars">
               
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.30 <span>  Rs.35 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /piece </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="m8.png" alt="">
            <h3>Eggs</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.86 <span>  Rs.108 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Dozen </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        

    </div>

</section>
<!----Meat section ends--->

<!-- kitchen accessories section starts  -->

<section class="product" id="product">

    <h1 class="heading">Kitchen <span>accessories</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="25.jpg" alt="">
            <h3>Rice</h3>
            <div class="stars">
               
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.75 <span> Rs.98 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="26.jpg" width="285px" alt="">
            <h3>Salt</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.45 <span> Rs.55 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Pkt </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="27.jpg" alt="">
            <h3>Cashew</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price"> Rs.809.99 <span>  Rs.850 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg</span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="28.jpg" alt="">
            <h3>Nutella</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.149<span>  Rs.155 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Container </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="29.jpg" alt="">
            <h3>Olive Oil</h3>
            <br><br><br>
            <div class="price">  Rs.599.00 <span>  Rs.650.15 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Litre </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-9%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="30.jpg" alt="">
            <h3>Pluses</h3>
            <br><br><br>
            <div class="price">  Rs.65 <span>  Rs.80 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="32.jpg" alt="">
            <h3>Sugar</h3>
            <div class="stars">
               
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.55.50</div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="31.jpg" alt="">
            <h3>Chesse Slices</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
            <div class="price">  Rs.54<span>  Rs.60 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 5 Slices </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="33.jpg" alt="">
            <h3>Maggi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.10 <span>  Rs.11.99 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Pkt </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

         <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="34.jpg" alt="">
            <h3>Aashirvaad Atta</h3>
            <br><br><br>
            <div class="price">  Rs.57.50</div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
     

          <div class="box">
           <span class="discount">-13%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
                </div>
            <img src="35.jpg"  alt="">
            <h3>Tea</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">  Rs.137.90</div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
     </div>

    </div>

</section>

<!-- kitchen accessories section ends -->


<!--Cleaning product section begins-->

<section class="product" id="product">

    <h1 class="heading">Cleaning <span>Products</span></h1>

    <div class="box-container">

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="14.jpg" alt="">
            <h3>Brooms</h3>
            <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">Rs.35</div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /pkt </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
       
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="15.jpg" alt="">
            <h3>Floor Cleaner</h3>
                <br><br><br>
            <div class="price"> Rs.85 <span> Rs.95 </span> </div>    
             <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Pc. </span>   
            </div>    
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="18.jpg" alt="">
            <h3>Magic Mop</h3>
            <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.599 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span>  </span>
            </div>
            <a href="Login.css" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="17.jpg" alt="">
            <h3>Detergents</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.162 <span> Rs.175 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
          
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="16.jpg" alt="">
            <h3>Harpic</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.75 <span> Rs.89.99 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /pc. </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="19.jpg" alt="">
            <h3>Dish Cleaner</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
               
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.55 </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /Sachet </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
</div>

</section>

<!--Cleaning product section ends-->


<!-- covid-19 section starts  -->

<section class="covid-19" id="covid-19">

    <h1 class="heading">latest <span>covid-19</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="24.jpg" alt="">
            <h3>PPE Kit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
               
                
            </div>
            <div class="price"> Rs.699.89 <span> Rs.799.99  </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /packet </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="20.jpg" width="260px" alt="">
            <h3>Hand Sanitizer</h3>
            <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.55  </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /ml </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="22.jpg" alt="">
            <h3>N95 Mask</h3>
                <br><br><br>
            <div class="price">Rs.95<span> Rs.105</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /packet </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="23.jpg" alt="">
            <h3>Disinfectant Spray</h3>
            <div class="stars">
                
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.95.50 <span>Rs.115.50</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /ml </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-2%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="21.jpg" alt="">
            <h3>Face Shield</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <div class="price">Rs.75 <span> Rs.80</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /packet </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="https://images.unsplash.com/photo-1585960410426-86a4b41a34f3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b3h5Z2VuJTIwdGFua3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            <h3>oxygen cylinder</h3>
            <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> Rs.1,765.89 <span> Rs.1,999.79</span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /liter </span>
            </div>
            <a href="Login.php" class="btn">add to cart</a>
        </div>
</div>

</section>


<!-- covid-19 section ends  -->

<!-- product section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">Contact<span>US</span></h1>

    <form action="message.php" method="POST">

        <div class="inputBox">
            <input type="text" placeholder="Name" name="name">
            <input type="email" placeholder="E-mail" name="email">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="Number" name="number">
            <input type="text" placeholder="Subject" name="topic">
        </div>

        <textarea placeholder="Message" name="textarea" id="" cols="30" rows="10"></textarea>
        <!---
        <input type="Submit" value="send message" class="btn">
        --->
        <button class="btn" type="submit"> submit </button>

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>subscribe us for latest update of products</h3>

    <form action="">
        <input class="box" type="email" placeholder="Enter your e-mail">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer" >

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Organika Grocers</a>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>

            </div>
        </div>
        
        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">India</a>
                <a href="#">USA</a>
                <a href="#">france</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
            </div>

    </div>
<h1 class="credit"> created by <span> ORGANIKA GROCERS </span> | all rights reserved! </h1>


</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script>
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let header = document.querySelector('.header-2');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 150){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }

}

let countDate = new Date('june 1, 2021 00:00:00').getTime();

function CountDown(){

    let now = new Date().getTime();
    gap = countDate - now;

    let second = 1000;
    let minute = second * 60;
    let hour = minute * 60;
    let day = hour * 24;

    let d = Math.floor(gap / (day));
    let h = Math.floor((gap % (day)) / (hour));
    let m = Math.floor((gap % (hour)) / (minute));
    let s = Math.floor((gap % (minute)) / (second));

    document.getElementById('day').innerText = d;
    document.getElementById('hour').innerText = h;
    document.getElementById('minute').innerText = m;
    document.getElementById('second').innerText = s;

}

setInterval(function(){
    CountDown();
},1000)
</script>
    
</body>
</php>