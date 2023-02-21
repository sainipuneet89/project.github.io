<?php $title = 'javascript';
include("header.php");
?>
<div class="javascript">
    <div style="text-align: center; font-size: 40px; font-weight: 900;">JavaScript</div><br>
    <div style="font-size:30px;  text-decoration: underline; color: blue;">Meaning Of JavaScript:-</div>
    <div style="font-size: 20px;">JavaScript is a dynamic programming language that's used for web development, in web
        applications, for game development, and lots more. It allows you to implement dynamic features on web pages that
        cannot be done with only HTML and CSS. JavaScript renders web pages in an interactive and dynamic fashion. This
        allowing the pages to react to events, exhibit special effects, accept variable text, validate data, create
        cookies, detect a user’s browser, etc.</div>
    <div style="font-size:30px;  text-decoration: underline; color: blue;">Features of JavaScript:-</div>
    <div style="font-size: 20px;">
        <ul>
            <li>JavaScript is the world's most popular programming language.</li>
            <li>JavaScript is the programming language of the Web.</li>
            <li>JavaScript is easy to learn.</li>
            <li>This tutorial will teach you JavaScript from basic to advanced.</li>
            <ul>
    </div>
    <br>
    <div>
        <div class="d1">
            <div style="font-size:30px;  text-decoration: underline; color: blue;">What Can JavaScript Do?</div>

            <p>JavaScript can change HTML attribute values.</p>

            <p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

            <div style="text-align:center;"><button onclick="document.getElementById('img').src='pic_bulbon.gif'">Turn
                    on the light</button>

                <img id="img" src="pic_bulboff.gif" style="width:100px">

                <button onclick="document.getElementById('img').src='pic_bulboff.gif'">Turn off the light</button>
            </div>


        </div>

        <br>
        <?php include("footer.php"); ?>