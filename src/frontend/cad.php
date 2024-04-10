<?php
$title = "Dispatch System";
$css_files = array(
    "css/cad.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
include "../backend/db.php";

session_start();

?>


<body>
    <div class="container">
        <?php include "page_header.php"; ?>

        <div class="header">
            <div class="leftwrapper">
                <div class="button map">
                    <i class="fas fa-globe"></i>
                    <a href=""></a>
                </div>
                <div class="button contacts">
                    <i class="fas fa-book"></i>
                    <a href=""></a>
                </div>
                <div class="button timer">
                    <i class="fas fa-clock"></i>
                    <a href=""></a>
                </div>
                <div class="button net">
                    <i class="fas fa-broadcast-tower"></i>
                </div>
                <div class="button serverstat">
                    <i class="fas fa-server"></i>
                </div>
            </div>
            <div class="time">
                <script>
                    const displayTime = document.querySelector(".time");

                    function showTime() {
                        let time = new Date();
                        displayTime.innerText = time.toLocaleTimeString("de-DE", {
                            hour12: false
                        });
                        setTimeout(showTime, 1);
                    }

                    showTime();
                </script>
            </div>
            <div class="rightwrapper">
                <div class="button filter">
                    <i class="fas fa-filter"></i>
                    <a href=""></a>
                </div>
                <div class="button mail">
                    <i class="fas fa-envelope"></i>
                    <a href=""></a>
                </div>
                <div class="button wind">
                    <i class="fas fa-wind"></i>
                    <a href=""></a>
                </div>
                <div class="button ambulance">
                    <i class="fas fa-ambulance"></i>
                </div>
                <div class="button fire">
                    <i class="fas fa-fire"></i>
                </div>
                <div class="button fullscreen">
                    <i class="fas fa-expand"></i>
                </div>
            </div>
        </div>

    </div>
</body>

</html>