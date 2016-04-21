<?php include_once('connect.php');?>
<?php date_default_timezone_set('Asia/Calcutta');  ?>
<!doctype HTML>
<html>
<head>
    <title>ToolBox - We Got Web Tools Which Makes Your Life Easy</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>        
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
	<?php
	if (isset($_GET['search']))
{
    $now = date("Y-m-d H:i:s");  
    $term = mysql_real_escape_string(strip_tags(trim($_GET['search'])));
     if (mysql_result(mysql_query("SELECT COUNT(id) FROM search WHERE id = '$term'"), 0) > 0)
    {
      mysql_query("UPDATE search SET counter = counter+1, last_search = '$now' WHERE id = '$term'");
    } 
}
	?>
        <!--loader-->
        <div class="overlay">
            <div class="loader cf">
                <div class="cube c1"></div>
                <div class="cube c2"></div>
                <div class="cube c4"></div>
                <div class="cube c3"></div>
            </div>
        </div>
        <!--loader end-->
        <a href="#top" rel="m_PageScroll2id" class="toTop"><i class="fa fa-angle-up"></i></a>
        <!--navigation-->
        <nav class="navbar-default navbar navbar-fixed-top nav-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo font30" href="#"><i class="fa fa-archive"></i> ToolBox</a>
                </div>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="nav navbar-nav navbar-right nav-cust-ul">
                        <li><a href="#home" rel="m_PageScroll2id">Home</a></li>
                        <li><a href="#tools" rel="m_PageScroll2id">Tools</a></li>
                        <li><a href="#about" rel="m_PageScroll2id">About</a></li>
                        <li><a href="#participate" rel="m_PageScroll2id">Participate</a></li>
                        <li><a href="#contact" rel="m_PageScroll2id">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--navigation end-->
        <section class="home wrapper" id="home">
            <div class="container homeCont">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center white wlcm-txt">
                        <h1 class="uppercase font30">Welcome to World's Biggest Online Tools Catalogue</h1>
                        <span>We currently have <strong>25</strong> tools and <strong>150</strong> Users Online</span>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-6 form-group">
                        <i class="fa fa-bars form_ico fa-lg"></i>
                        <input type="text" class="form-control norad input-lg categ" id="categ" placeholder="Search Category">
                    </div>
                    <div class="col-md-6 form-group">
                        <i class="fa fa-search form_ico fa-lg"></i>
                        <input type="text" class="form-control norad input-lg toolz" id="toolz" placeholder="Search Tool">
                    </div>
                    <a class="toDown" rel="m_PageScroll2id" href="#tools"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </section>
		
		<?php
		$terms = array(); 
        $maximum = 0; 	
 
        $query = mysql_query("SELECT term, counter, id FROM `search` ORDER BY counter DESC LIMIT 30");
        while ($row = mysql_fetch_array($query))
		{
			$term = $row['term'];
			$counter = $row['counter'];
			$id = $row['id'];
		   if ($counter > $maximum) $maximum = $counter;
		 	$terms[] = array('term' => $term,'id' => $id, 'counter' => $counter);
		}
		
 
// shuffle terms unless you want to retain the order of highest to lowest
shuffle($terms);
		?>
		
        <section class="wrapper tools" id="tools">                        
            <div class="container toolsCont">                
                <div class="row">                    
                   <div class="col-md-12 col-sm-12">
                        <h2 class="text-center uppercase">Tools</h2>
                       <div class="cloud">
                        <ul class="cloud-ul">
						<?php 
						
						//echo "<pre>";
						//print_r($terms);echo "</pre>";
// start looping through the tags
foreach ($terms as $term):
 // determine the popularity of this term as a percentage
  $percent = floor(($term['counter'] / $maximum) * 100);
 
 // determine the class for this term based on the percentage
 if ($percent < 10): 
   $class = 'c1'; 
 elseif ($percent >= 10 and $percent < 20):
   $class = 'c2'; 
 elseif ($percent >= 20 and $percent < 30):
   $class = 'c3';
 elseif ($percent >= 30 and $percent < 40):
   $class = 'c4';
 elseif ($percent >= 40 and $percent < 50):
   $class = 'c5';
 elseif ($percent >= 50 and $percent < 60):
   $class = 'c6';
 elseif ($percent >= 60 and $percent < 70):
   $class = 'c7';
 elseif ($percent >= 70 and $percent < 80):
   $class = 'c8';
 elseif ($percent >= 80 and $percent < 90):
   $class = 'c9';
 else:
  $class = 'c10';
 endif;
?>
                            <li><a class="<?php echo $class; ?>" href="?search=<?php echo $term['id']; ?>"><?php echo $term['term']; ?></a></li>
							<?php endforeach; ?>
                        </ul>
                       </div>
                    </div>
                </div>
            </div>
			
        </section>
        <section class="wrapper about" id="about">                       
            <div class="container aboutCont">                
                <div class="row">                    
                    <div class="col-md-12 col-sm-12">
                        <h2 class="text-center uppercase">About</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper participate" id="participate">
            <div class="gap-md"></div>            
            <div class="container">                
                <div class="row">                    
                    participate
                </div>
            </div>
        </section>
        <section class="wrapper contact" id="contact">
            <div class="gap-md"></div>            
            <div class="container">                
                <div class="row">                    
                    contact
                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/slowscroll.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>