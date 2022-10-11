<?php
    $api_key = "0E8DAF510F0F9840F78A293B3B074E1A";
    $steamid = "76561198414640282";

    $api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";

    $json = json_decode(file_get_contents($api_url), true);

    $join_date = date("D, M j, Y", $json["response"]["players"][0]["timecreated"]);

    function personaState($state)
    {
        if ($state == 1)
        {
            return "💻";
        }
        elseif ($state == 2)
        {
            return "💻";
        }
        elseif ($state == 3)
        {
            return "💊";
        }
        elseif ($state == 4)
        {
            return "💤";
        }
        elseif ($state == 5)
        {
            return "💻";
        }
        elseif ($state == 6)
        {
            return "💻";
        }
        else
        {
            return "💎";
        }
    }

?>
<!DOCTYPE html>

<html lang="en" crosspilot> 
 <head>
    <link rel="icon" type="image/x-icon" href="https://azuretium.space/imgs/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta charset="UTF-8"/>
    <meta name="description" content="A website where I will publish monthly news about my developments and about my life."/>
    <meta name="Keywords" content="Azuri, azuretium, Azuri, heut, heutick, heut42069, pribora, maksim"/>
    <link rel="stylesheet" href="style/style.css">
    <title> Azuretium </title> 

<!-- meta -->
<meta name="theme-color" content="#000000">
<meta property="og:site_name" content="azuretium.space">
<meta property="og:title" content="Front page">
<meta property="og:url" content="http://azuretium.space">
<meta property="og:type" content="website">
<meta property="og:image" content="https://azuretium.space/imgs/meta.png">
<meta itemprop="name" content="Front page">
<meta itemprop="url" content="http://azuretium.space">
<meta itemprop="thumbnailUrl" content="https://azuretium.space/imgs/meta.png">
<link rel="image_src" href="https://azuretium.space/imgs/meta.png">
<meta itemprop="image" content="https://azuretium.space/imgs/meta.png">

<meta name="twitter:title" content="Front page">
<meta name="twitter:url" content="http://azuretium.space">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://azuretium.space/imgs/meta.png">
<meta name="description" content="A website where I will publish monthly news about my developments and about my life.">

</head>
<body>
    <div id="about"> </div>

    <nav class="nav">
          
        <div class="flexing">
          <a title="azuretium.space" href="http://azuretium.space" class="titletoplink">
            <div class="logo"></div> <h1 class="maintitle">Azuretium </h1>
          </a>
          
        </div>
            <nav class="defolt-menu">
                <ul>
                <li><a class="button" href="#about">Обо мне</a></li>
                <li><a class="button" href="#skills">Навыки</a></li>
                <li><a class="button" href="#projects">Проекты</a></li>
                <li><a class="button" href="https://azuretium.space/blogs">Блог</a></li>
                </ul>
              </nav>

            <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
              <ul class="mobile-menu">
                <li><a class="button" href="#about">Обо мне</a></li>
                <li><a class="button" href="#skills">Навыки</a></li>
                <li><a class="button" href="#projects">Проекты</a></li>
                <li><a class="button" href="https://azuretium.space/blogs">Блог</a></li>
              </ul>
            </div>

    </nav>



<div id="mid">
<section class="toptext">
    <!-- Ria <3 -->
    
    <img src="<?=$json["response"]["players"][0]["avatarfull"];?>" class="bigpic"> 
    <div class="texttoptop">
    <h1 class="maksim"><?=$json["response"]["players"][0]["personaname"];?> <?=personaState($json['response']['players'][0]['personastate']);?></h1> 
    <p class="maintext2">Приветствую! Я Максим, известный также как Azuri. </p>
    <p class="maintext2">Я левел дизайнер. Люблю создавать различные карты и контент для них.</p>
    <p class="maintext2">Сейчас я работаю в  <a href="https://rndevs.online/" title="renewed networks" target="_blank" class="rn">Renewed Networks</a> над Runaway-17 и прочими проктами. </p>
    
    <div class="topbuttons">
        <a href="https://steamcommunity.com/id/heut42069" title="My steam" target="_blank"> <img src="https://azuretium.space/imgs/steam.png" class="button3"> </a>
        <a href="https://github.com/heut42069" title="My github" target="_blank"><img src="https://azuretium.space/imgs/github.png" class="button3"> </a>
        <a href="https://discordapp.com/users/449448506780811265/" title="My discord" target="_blank"> <img src="https://azuretium.space/imgs/discord.png" class="button3"> </a>
        <a href="https://boosty.to/heutick" title="donat me" target="_blank"><img src="https://azuretium.space/imgs/boosty.png" class="button3"> </a>
        <a href="https://www.moddb.com/members/heutick" title="my moddb" target="_blank"><img src="https://azuretium.space/imgs/moddb.png" class="button3"> </a>
        <a href="https://www.youtube.com/channel/UCt5FiVUoCsoMTIRHyP8Fx8A" title="my youtube" target="_blank"><img src="https://azuretium.space/imgs/youtube.png" class="button3"> </a>
        <a href="https://t.me/heutick " title="my tg" target="_blank"><img src="https://azuretium.space/imgs/tg.png" class="button3"> </a> 
        <a href="https://instagram.com/heut42069" title="my instagram" target="_blank"><img src="https://azuretium.space/imgs/instagram.png" class="button3"> </a> 
    </div>  
    </div>
</section> 
<div id="skills"> </div>
<div id="cont">
<section class="skillsect">
    
    <h1 class="downtitle">Навыки</h1>
    
        <div class="skills"> 
             <table>
                <tr>
                <td><img src="https://azuretium.space/imgs/skills/sors.png" class="skillh3"></td>
                <td><p class="skillp">Занимаюсь созданием игровых карт на Source/Source2.</p></td>
                </tr>
                <td><img src="https://azuretium.space/imgs/skills/htmls.png" class="skillh3"></td>
                <td><p class="skillp">Занимаюсь фронтед и иногда бэкенд разработкой сайтов.</p></td>
                <tr>
                    
                </tr>
                <td><img src="https://azuretium.space/imgs/skills/blender.png" class="skillh3"></td>
                <td><p class="skillp">Занимаюсь созданием и редактированием моделей.</p></td>
                <tr>

                </tr>
             </table><div id="projects"> </div>
        </div>
</section>
  
<section class="prjcs-sect">

        <h1 class="downtitle">Проекты</h1>
    
        <a href="https://azuretium.space/" class="projectcard"> 
            <img src="https://azuretium.space/imgs/projectss/web.png" class="prjc-image">
            <div class="prjc-texting">
                <h3 class="prjc">Этот вебсайт</h3> 
                <p class="prjc">Сайт, на котором вы сейчас находитесь.</p>
            </div>
             
            
        </a>

        <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2846083653" target="_blank" class="projectcard"> 
            <img src="https://azuretium.space/imgs/projectss/ame.png" class="prjc-image-ame">
            <div class="prjc-texting">
            <h3 class="prjc">gm_ame</h3> 
             <p class="prjc">Карта в стиле Neotokyo/cyberpunk для gmod.</p>
            </div>
        </a>

        <a href="https://rndevs.online/projects/runaway17" target="_blank" class="projectcard"> 
            <img src="https://azuretium.space/imgs/projectss/ra17.png" class="prjc-image">
            <div class="prjc-texting">
            <h3 class="prjc">Runaway-17</h3> 
             <p class="prjc">Синглплеерная модификация для Half-life 2.</p>
            </div>
        </a>

        <div class="center-flex">
        <div class="more">
            <a data-v-5d00c0fc="" data-v-5b998fad="" href="https://azuretium.space/showcase" class="view-more">
                См. больше
                <svg data-v-5d00c0fc="" data-v-5b998fad="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="up-right-from-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-up-right-from-square">
                    <path data-v-5d00c0fc="" data-v-5b998fad="" fill="currentColor" d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z" class="">
        
                    </path>
                </svg>
            </a>
        </div>
        </div>
    </div>
</section>

</div>
</div>


   </div>
</div>

  <div class="bottom">
  <div class="footer">
  
    <p class="bottext">©  Azuri 2022 </p> 
  <div class="linkss">
  <a href="https://instagram.com/heut42069" title="my instagram" target="_blank"><img src="https://azuretium.space/imgs/instagram.png" class="button2"> </a> 
  <a href="https://t.me/heutick" title="my tg" target="_blank"><img src="https://azuretium.space/imgs/tg.png" class="button2"> </a> 
  <a href="https://www.youtube.com/channel/UCt5FiVUoCsoMTIRHyP8Fx8A" title="my youtube" target="_blank"><img src="https://azuretium.space/imgs/youtube.png" class="button2"> </a>
  <a href="https://www.moddb.com/members/heutick" title="my moddb" target="_blank"><img src="https://azuretium.space/imgs/moddb.png" class="button2"> </a>
  <a href="https://boosty.to/heutick" title="DOANT ME" target="_blank"><img src="https://azuretium.space/imgs/boosty.png" class="button2"> </a>
  <a href="https://discordapp.com/users/449448506780811265/" title="My discord" target="_blank"> <img src="https://azuretium.space/imgs/discord.png" class="button2"> </a>
  <a href="https://github.com/heut42069" title="my github" target="_blank"><img src="https://azuretium.space/imgs/github.png" class="button2"> </a>
  <a href="https://steamcommunity.com/id/heut42069" title="My steam" target="_blank"> <img src="https://azuretium.space/imgs/steam.png" class="button2"> </a>
</div>  
</div>
</div>



    <!-- scripts -->
    <script src="scripts/script2.js"></script>
 </body>
</html>

