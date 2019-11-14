<header>
<header-top>
    <p>A: 185 Carlaw Ave, Toronto, ON </p>
    <p>E: <a href="mailto:admin@structureclinic.ca">admin@structureclinic.ca</a></p> 

    <div style='padding-top: 4px;'>
        <a style='margin-right: 5px;' href="https://www.facebook.com/structureclinic/"> <img src="./imgs/facebook.png" style='margin: 0;width: 22px;' /> </a>
        <a href="https://www.instagram.com/structure_clinic_toronto/"> 
            <img src="./imgs/instagram.png" style='width: 22px;margin: 0;' />
        </a>
    </div>
</header-top>
    <div class="container-big">
        <img src="./imgs/logo-flat.png" width="320" style="margin-top: -10px;padding: 11px 0 0 0;" />
        <nav>
            <ul>
            <?php
            foreach($configNav as $page){
                if($page['active']==1){
                    echo '<li><a class="link" href="'.$page['link'].'">'.$page['displayName'].'</a></li>';
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