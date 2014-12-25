<?php
    $productCategories = $this->requestAction('products/getProductCategories');
?>
<link rel="stylesheet" href="<?php echo $this->webroot ?>css/blueimp-gallery.min.css">

<body>

<section id="portfolio">
    <div class="container">
        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="<?php echo $this->Html->url(array('controller' => 'Products', 'action' => 'index'))?>" data-filter="*">ALL</a></li>
            <?php
                foreach($productCategories as $nc) {
                    ?>
                        <li><a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'Products', 'action' => 'index', $nc['ProductCategory']['id'])) ?>"><?php echo $nc['ProductCategory']['name']; ?></a></li>     
                    <?php
                }
            ?>
        </ul><!--/#portfolio-filter-->

            <div id="links">
                <div class="portfolio-items">
                    <?php foreach ($detail as $ctr => $products): ?>
                        <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                    <div class="post">
                                        <figure>
                                            <?php
                                                echo $this->Aimfox->printImageByImageId($products['Image']['id'], array(
                                                        'tag'         => 'img',
                                                        'fileName'    => $products['Image']['attachment'],
                                                        'imageType'   => 'thumb',
                                                        ));
                                             ?>
                                                <div class="overlay">
                                                    <span class="base"><h1>ANJANI GREEN BROWN</h1></br></span>
                                                    <p>SOLD</p>
                                                    <p><a href="<?php echo $products['Image']['attachment'] ?>"><i class="fa fa-eye"></i>View</a></p>
                                                </div>
                                        </figure>  
                                    </div>     
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/anjangreenbrown3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ANJANI GREEN BROWN</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a  href="images/portfolio/full/anjangreenbrown3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>     
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/anjanibrowngold3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ANJANI BROWN GOLD</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/anjanibrowngold3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/anjanimaroobrown3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ANJANI MAROON BROWN </h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/anjanimaroobrown3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/anjaniredblack3250sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ANJANI RED BLACK</h1></br></span>
                                                <P>SOLD</P>
                                                <p><a href="images/portfolio/full/anjaniredblack3250sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/anjaniwhitebrown3250sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ANJANI WHITE BROWN</h1></br></span>
                                                <P>SOLD</P>
                                                <p><a href="images/portfolio/full/anjaniwhitebrown3250sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadicremebrown3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI CREAM BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/drupadicremebrown3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadigoldblack3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI GOLD BLACK</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/drupadigoldblack3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadigreenbrown3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI GREEN BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/drupadigreenbrown3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadiorangebrown3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI ORANGE BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/drupadigreenbrown3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadipeachbrown3500sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI PEACH BROWN</h1></br></span>
                                                <P>SOLD</P>
                                                <p><a href="images/portfolio/full/drupadigreenbrown3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadiredblue3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI RED BLUE</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/drupadiredblue3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadiwhitebrown3250sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI WHITE BROWN</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/drupadiwhitebrown3250sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/drupadiwhitered3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>DRUPADI WHITE RED</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/drupadiwhitered3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiblackblack2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI BLACK BLACK</h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/kuntiblackblack2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiblackgreen3500.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI BLACK GREEN</h1></br></span>
                                                <span class="arrow">IDR 3.500.000</span>
                                                <p><a href="images/portfolio/full/kuntiblackgreen3500.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiblackred2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI BLACK RED</h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/kuntiblackred2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntibluewhite3500.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI BLUE WHITE</h1></br></span>
                                                <span class="arrow">IDR 3.500.000</span>
                                                <p><a href="images/portfolio/full/kuntibluewhite3500.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntibrowbrown3500sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI BROWN BROWN</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/kuntibrowbrown3500sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntigreenblue2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI GREEN BLUE</h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/kuntigreenblue2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntipurplepink.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI PORPLE PINK</h1></br></span>
                                                <span class="arrow">IDR 3.500.000</span>
                                                <p><a href="images/portfolio/full/kuntipurplepink.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiredphy3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI REDPHY </h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/kuntiredphy3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiwhiteblue2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI WHITE BLUE </h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/kuntiwhiteblue2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/kuntiwhiteorange3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>KUNTI WHITE ORANGE </h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/kuntiwhiteorange3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimblackred3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM BLACK RED</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/madrimblackred3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimbluered3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM BLUE RED</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/madrimbluered3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimbrownbrown3500.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM BROWN BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.500.000</span>
                                                <p><a href="images/portfolio/full/madrimbrownbrown3500.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimgoldphy3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM GOLDPHY</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/madrimgoldphy3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimgreenbrown3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM GREEN BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/madrimgreenbrown3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimmaroonbrown3250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM MAROON BROWN</h1></br></span>
                                                <span class="arrow">IDR 3.250.000</span>
                                                <p><a href="images/portfolio/full/madrimmaroonbrown3250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimpurplesilver3750sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM PURPLE SILVER</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/madrimpurplesilver3750sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimredbrown3750sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM RED BROWN</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/madrimredbrown3750sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimtosca2500.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM TOSCA</h1></br></span>
                                                <span class="arrow">IDR 2.500.000</span>
                                                <p><a href="images/portfolio/full/madrimtosca2500.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/madrimwhitered2750sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>MADRIM WHITE RED</h1></br></span>
                                                <span class="arrow">IDR 2.750.000</span>
                                                <p><a href="images/portfolio/full/madrimwhitered2750sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/rarasatipurpleblue2750.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>RARASATI PURPLE BLUE</h1></br></span>
                                                <span class="arrow">IDR 2.750.000</span>
                                                <p><a href="images/portfolio/full/madrimwhitered2750sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/rarasatiwhiteorange3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>RARASATI WHITE ORANGE</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/rarasatiwhiteorange3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/saraswatibluephy3250sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SARASWATI BLUEPHY</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/saraswatibluephy3250sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/saraswatiphinkphy3500sold.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SARASWATI PHINKPHY</h1></br></span>
                                                <p>SOLD</p>
                                                <p><a href="images/portfolio/full/saraswatiphinkphy3500sold.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/saraswatiwhiteorange3000.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SARASWATI WHITE ORANGE</h1></br></span>
                                                <span class="arrow">IDR 3.000.000</span>
                                                <p><a href="images/portfolio/full/saraswatiwhiteorange3000.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/sekargreenpink2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SEKAR GREEN PINK</h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/sekargreenpink2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/sekarpinkpink2250.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SEKAR PINK PINK</h1></br></span>
                                                <span class="arrow">IDR 2.250.000</span>
                                                <p><a href="images/portfolio/full/sekarpinkpink2250.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/utarigreentosca2750.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>UTARI GREEN TOSCA</h1></br></span>
                                                <span class="arrow">IDR 2.750.000</span>
                                                <p><a href="images/portfolio/full/utarigreentosca2750.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/utaripurplewhite2500.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>UTARI PURPLE WHITE</h1></br></span>
                                                <span class="arrow">IDR 2.500.000</span>
                                                <p><a href="images/portfolio/full/utaripurplewhite2500.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                        </div>
                    </div>
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/lampshade.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>ABIMANYU AND PARIKESIT</h1></br></span>
                                                <span class="arrow">IDR 2.400.000</span>
                                                <p><a href="images/portfolio/full/abimanyu.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                            </a>
                        </div>
                    </div>
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                                <div class="post">
                                    <figure>
                                        <img src="images/portfolio/recent/wallet.jpg">
                                            <div class="overlay">
                                                <span class="base"><h1>SINGLE WALLET</h1></br></span>
                                                <span class="arrow">IDR 950.000</span>
                                                <p><a href="images/portfolio/full/wallet.jpg"><i class="fa fa-eye"></i> View</a></p>
                                            </div>
                                    </figure>  
                                </div>      
                            </a>
                        </div>
                    </div>
            </div>
        </div>
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
    </div>
</section>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<script src="<?php echo $this->webroot ?>js/blueimp-gallery.min.js"></script>
</body>