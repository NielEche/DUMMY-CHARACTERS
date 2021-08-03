@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')


<section>
    <div class="container-fluid bg-black">
        <div class="">
            <div class="bio text-right">
                <button class="btn biobtn"> <span>X</span></button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 biodetails">
                <div id="niel" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                   <!-- <?php
                    $query = "SELECT * FROM about";
                   

                    if (mysqli_num_rows($query) > 0) 
                    {
                    ?>

                    <?php
                        while ($row = mysqli_fetch_assoc($query))
                        {
                    ?>
                    <p><?php echo $row['about_text'] ?>
                    </p>
                    <?php	
                        }
                        ?>

                    <?php
                        }
                        else
                        {
                        echo "No Record Found";
                        }
                    ?>
                    <p><a style="color:#333;" href="bio.php">Read More</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                    <h3 class="marquee"> <span> Niel Eche&trade;</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="text-right outerlinks nopadding">
            <div class="links ">
                <img src="assets/images/37.ico" alt="A Niel Eche image">
                <p>Loudhouse</p>
            </div>
            <div class="links">
                <img src="assets/images/16.ico" alt="A Niel Eche image">
                <p>Crusero</p>
            </div>
            <div style="padding-right:0px;" class="links">
                <img style="width:75px; height:auto;" src="assets/images/code.gif" alt="A Niel Eche image">
               
            </div>
        </div>
    </div>
</section>

<section class="visible-sm visible-xs ">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <?php 
                $query = "SELECT * FROM slider";
               

                    $hasAddedActive = false;
                    while ($row = mysqli_fetch_array($query)) {      
                    $id =($row['id']);                      
                    $image =($row['image']);
                ?>

                <?php 
                    $divClass = 'item bnw-filter';
                    $divClass .= $hasAddedActive ? '' : ' active';
                    $hasAddedActive = true;
                    echo('<div class="'.$divClass.'">'); 
                ?>
                    <?php 
                        echo '<img src="admin/slider/'.$image.'" class="img-fluid">';
                    ?>
                <?php echo('</div>'); ?>    

                <?php } ?>
            </div>       
            
        </div><br>
    </div>
</section>

<section>
    <div class="container-fluid"><br>
        <div style="margin-bottom:50px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nopadding">
                
                <?php


                    $query = "SELECT * FROM project ORDER BY date DESC";
             

                    if (mysqli_num_rows($query) > 0) 
                    {
                    ?>

                    <?php
                        while ($row = mysqli_fetch_assoc($query))
                        {
                    ?>
                    
                <div id="<?php echo $row['title'] ?>" class="col-lg-6 col-md-6 col-sm-12 co-xs-12 nopadding">
                    <div id="accordion">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 projectheader">
                             <h4>
                                <a name="midnight " data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a>
                            </h4>
                        </div>
                        <div class="text-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class=" nopadding">
                                <form style="margin-left:0px !important;" action="curated.php" method="post">
                                    <input type="hidden" name="field_name" value="<?php echo $row['field'] ?>">
                                    <button name="field_btn" class="btn biobtn"> <span><?php echo $row['field'] ?></span></button>
                                </form>
                            </div>

                            <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                                <form action="curated.php" method="post">
                                    <input type="hidden" name="field_name" value="<?php echo $row['field2'] ?>">
                                    <button name="field_btn" class="btn biobtn"> <span><?php echo $row['field2'] ?></span></button>
                                </form>
                            </div>-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 projectbody">
                                <p><?php echo $row['location'] ?></p>
                            </div>
                            <div class="text-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <span style="font-size:20px;" class="flag-icon flag-icon-<?php echo $row['flag'] ?>"></span>
                            </div>
                        </div>
                        

                        <div id="<?php echo $row['id'] ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 projectbody panel-collapse collapse in">
                            <p><?php echo $row['about'] ?>
                            </p>
                            <img class="portimage" src="admin/upload/<?php echo $row['image'] ?>" alt="A Niel Eche image">
                           <div class="col-g-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                                     <button name="project_btn" data-toggle="collapse" data-target="#1<?php echo $row['id'] ?>" class=" btn biobtn"> <span class="box">More</span></button>
                
                                     <script>
                                        $(".box").click(function() {
                                            $(this).text() == "Less" ?
                                            $(this).text("More") : $(this).text("Less");
                                        }) ;
                                     </script>
                                     <div id="1<?php echo $row['id'] ?>" class="collapse">
                                         <br>

                                         <?php
                                            if($query) {

                                                $ids = $row['id'];

                                                $querys = "SELECT * FROM projectimages WHERE project_id = '$ids' ";
                                         

                                                foreach ($query_runs as $rowss){
                                                
                                            ?>

                                         
                                            <img class="portimage" src="admin/projectupload/<?php echo $rowss['name'] ?>" alt="A Niel Eche image">
                                        
                                            <?php 
                                                
                                                }
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div id="accordion" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right nopadding">
                                    <p> <a data-toggle="collapse" data-target="#2<?php echo $row['id'] ?>" style="color:#000 !important; cursor: pointer !important;" >Share</a></p>
                                    <div id="2<?php echo $row['id'] ?>" class="collapse">
                                        <a style="color:#000; font-family:'Menlo';" target="_blank" href="http://twitter.com/share?text=check out <?php echo $row['title'] ?>&url=https://canary---yellow.com/index.php#<?php echo $row['title'] ?>">TW</a>
                                        <a style="color:#000; font-family:'Menlo';" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://canary---yellow.com/index.php#<?php echo $row['title'] ?>">FB</a>
                                        <a style="color:#000; font-family:'Menlo';" href="whatsapp://send?text=https://canary---yellow.com/index.php#<?php echo $row['title'] ?>">WH</a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="hori col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                    </div>
                    <div class="vl"></div>
                </div>

                <?php	
                        }
                       
                        }
                        else
                        {
                        echo "< STILL LOADING />";
                        }
                    ?>
                
            </div>
           
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div id="myCarousel" class="visible-lg visible-md carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                        $query = "SELECT * FROM slider";
                     

                            $hasAddedActive = false;
                            while ($row = mysqli_fetch_array($query)) {      
                            $id =($row['id']);                      
                            $image =($row['image']);
                        ?>

                        <?php 
                            $divClass = 'item bnw-filter';
                            $divClass .= $hasAddedActive ? '' : ' active';
                            $hasAddedActive = true;
                            echo('<div class="'.$divClass.'">'); 
                        ?>
                            <?php 
                                echo '<img src="admin/slider/'.$image.'" class="img-fluid">';
                            ?>
                        <?php echo('</div>'); ?>    

                        <?php } ?>
                    </div>       
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <h1 style="font-weight:bolder !important; color:#000 !important;">Sound</h1>
                    <div>
                    <?php
                    $query = "SELECT * FROM soundcloud";
                  
                    if (mysqli_num_rows($query) > 0) 
                    {
                    ?>

                    <?php
                        while ($row = mysqli_fetch_assoc($query))
                        {
                    ?>
                        <?php echo $row['link'] ?>    
                    <?php	
                    }
                    ?>

                    <?php
                        }
                        else
                        {
                        echo "No Record Found";
                        }
                    ?>
                    </div>

                    <div>
                    <?php
                    $query = "SELECT * FROM apple";
                  

                    if (mysqli_num_rows($query) > 0) 
                    {
                    ?>

                    <?php
                        while ($row = mysqli_fetch_assoc($query))
                        {
                    ?>
                        <?php echo $row['link'] ?>    
                    <?php	
                    }
                    ?>

                    <?php
                        }
                        else
                        {
                        echo "No Record Found";
                        }
                    ?>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <h1 style="font-weight:bolder !important; color:#000 !important;">Video</h1>
                    <div>
                    <?php
                    $query = "SELECT * FROM video";
                   

                    if (mysqli_num_rows($query) > 0) 
                    {
                    ?>

                    <?php
                        while ($row = mysqli_fetch_assoc($query))
                        {
                    ?>
                        <?php echo $row['link'] ?>    
                    <?php	
                    }
                    ?>

                    <?php
                        }
                        else
                        {
                        echo "< STILL LOADING />";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '
            <div class="alert alert-success" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong>Success: </strong>'.$_SESSION['success'].'
            </div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
            echo '<div class="alert alert-danger" role="alert">
            <button class="close" data-dismiss="alert"></button>
            <strong>Error: </strong>'.$_SESSION['status'].'
            </div>';
            
            unset($_SESSION['status']);
        }
    ?>
</div> 
@endsection
