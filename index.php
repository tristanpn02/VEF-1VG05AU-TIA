<!doctype html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>TIB | DOC-FRONT-PAGE</title>
    <!-- Include html block using php -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/head.html"); ?>
</head>

<body>

    <main>
        <!-- Include html block using php -->
        <?php include($_SERVER['DOCUMENT_ROOT']."/includes/maintop.html"); ?>
        <!-- Create title section for bulletin -->
        <section class="bullTitle">
            <a href="/">
                <h1>TORISUTAN</h1>
                <h1>INTELLICENGE</h1>
                <h1>BULLETIN</h1>
            </a>
        </section>
        <!-- Include svg image -->
        <img class="logo" src="/resource/img/tori.svg">
        <!-- Bottom right box and number on grid -->
        <section class="bottomRightX">
            <h3>25X1</h3>
            <div class="x50Box"></div>
        </section>
        <h3 class="bottomRightX2">25X1</h3>
        <!-- Bottom "group" box -->
        <section class="bottomGroup">
            <div class="x50Box">
                <p><strong>GROUP 3</strong><br>
                    This document is only for the eyes
                    of those assigned to <em>GROUP 3</em> or higher.</p>
            </div>
        </section>
        <!-- Bottom serial number -->
        <h5 class="bottomSerial">Approved for release under serial 645459919</h5>
        <!-- Confidential overlay image -->
        <img src="resource/img/confidential_dna_results.png">
        <!-- Navigation buttons -->
        <a href="/recordings/" class="lastPage">Last Page</a>
        <a href="/profile" class="nextPage">Next Page</a>
    </main>
</body>

</html>
