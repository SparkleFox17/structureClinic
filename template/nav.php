<header>
    <div class="container-big">
        <img src="./imgs/logo-flat.png" width="300" style="margin-top: -7px;" />
        <nav>
            <ul>
            <?php
            foreach($configNav as $page){
                if($page['active']==1){
                    echo '<li><a href="'.$page['link'].'">'.$page['displayName'].'</a></li>';
                }
            }
            ?>
            </ul>
        </nav>
        <div class="burger" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</header> 