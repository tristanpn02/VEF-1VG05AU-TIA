<html>

<head>
    <!-- Page Title -->
    <title>TIB | POI PROFILES</title>
    <!-- Include html block using php -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/head.html"); ?>
</head>

<body>
    <main>
        <!-- Include html block using php -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/includes/maintop.html"); ?>
        <!-- Head title -->
        <section class="bullHead">
            <h1>Interviews and Interrogations</h1>
        </section>
        <!-- Main Text area -->
        <section class="mainText">
            <dt>
                <h3>Wilford Warfstache</h3>
                <!-- Custom audio controls -->
                <div class="controls">
                    <button><strong>CONTROLS:</strong></button>
                    <button onclick="document.getElementById('warf').play()">Play</button>
                    <button onclick="document.getElementById('warf').pause()">Pause</button>
                    <button onclick="document.getElementById('warf').volume += 0.1">Vol +</button>
                    <button onclick="document.getElementById('warf').volume -= 0.1">Vol -</button>
                </div>
                <!-- Include audio file -->
                <audio id="warf">
                    <source src="/recordings/resource/warf.ogg" type="audio/ogg">
                </audio>
                <h4>Interrogated by Agent ███████</h4>
                <!-- Button to open overlay and video -->
                <button onclick="overlOpen(); overlVid()"><strong>Video Footage</strong></button>
            </dt>
            <!-- Overlay -->
            <div class="overlContent">
                <!-- Button to close overlay -->
                <span class="overlClose" onclick="overlClose()">&times;</span>
                <!-- Video frame -->
                <iframe class="overlVid" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <!-- Include html block using php -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/includes/mainbottom.html"); ?>
        <!-- Script to open video -->
        <script>
            function overlVid() {
                var frame = document.getElementsByClassName("overlVid")[0];
                if (overl.style.display === "none") {
                    frame.src = "https://www.youtube.com/embed/JUp9pCtn2BY?rel=0&amp;showinfo=0&amp;start=557";
                }
            }

        </script>
        <!-- Navigation buttons -->
        <a href="/profile/rico/" class="lastPage">Last Page</a>
        <a href="/" class="nextPage">Next Page</a>
    </main>
</body>

</html>
