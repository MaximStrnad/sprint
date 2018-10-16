<nav class="navbar navbar-expand-sm navbar-fixed-top navbar-dark bg-dark">
    <div class="col">
        <ul class="navbar-nav nav-tabs">
            <?php 
            foreach($pages as $page) {
                echo '
                    <li class="nav-item page-redirect">
                    <a href="#" data-page-redirect="' . $page . '">'. ($page !== "home" ? $page : "Home") . '</a>
                    </li>
                ';}
            ?>
        </ul>
    </div>

    <!-- :c
    <div class="col">
        <div class="input-group">    
            <input class="form-control" type="text" placeholder="Search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-warning"> Search </button>
            </div>
         </div> 
    </div>
    -->

    <div class="col">
        <div class="dropdown">
            <button type="button" class="btn btn-default" data-toggle="dropdown"><span> <img src="media/images/user.png"> </span></button>
            <div id="triangle"></div>

                <div class="dropdown-menu">
                    <div class="dropdown-item">
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="dropdown-item">
                        <input type="text" placeholder="Password">
                        </div>
                        <div class="dropdown-item">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                        </div>

                    </div>

                
                </div> 

            </div>                                                
        </div>

        
        <!-- TODO - login form -->
    </div>
    
</nav>