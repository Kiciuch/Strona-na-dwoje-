
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- lewo/prawo-->
   

    <!-- wrapper/slajdy -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner3.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner2.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/banner4.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner1.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner3.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Lewo prawo strzalki -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Do tyłu</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Do przodu</span>
    </a>
  </div>
</div>
     


		
		<div class="section mainn mainn-raised">
		
		
			
			<div class="container">
			
				
				<div class="row">
					
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptopy<br></h3>
								<a href="product.php?p=78" class="cta-btn">Kup teraz <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					

					
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Akcesoria<br></h3>
								<a href="product.php?p=72" class="cta-btn">Kup teraz <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					

					
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Kamery/Aparaty<br></h3>
								<a href="product.php?p=79" class="cta-btn">Kup teraz<i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		  
		

		
		<div class="section">
			
			<div class="container">
			
				<div class="row">

					
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nowe produkty</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptopy</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartfony</a></li>
									<li><a data-toggle="tab" href="#tab1">Kamery/aparaty</a></li>
									<li><a data-toggle="tab" href="#tab1">Akcesoria</a></li>
								</ul>
							</div>
						</div>
					</div>
					

					
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NOWOŚĆ</span>
										</div>
									</div></a>
									<div class='product-body'>
										
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$999.99</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Dodaj do listy życzeń</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>Dodaj do porównania</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Podgląd</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Dodaj do koszyka</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										
	
										
										
										
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		

		<!-- SEKCJA GORACE OFERTY -->
		<div id="hot-deal" class="section mainn mainn-raised">
			
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Dni</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Godzin</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Minut</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Sekund</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Super oferta tego tygodnia!</h2>
							<p>Zniżki aż do 50% !!</p>
							<a class="primary-btn cta-btn" href="store.php">Kup teraz</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
		

		
		<div class="section">
			
			<div class="container">
			
				<div class="row">

					
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Najczęściej wybierane</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					

					
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
							
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NOWOŚĆ</span>
										</div>
									</div></a>
									<div class='product-body'>
										
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$999.99</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Dodaj do listy życzeń</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>Dodaj do porównania</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Podgląd</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Dodaj do koszyka</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		

		
		
		
</div>
		