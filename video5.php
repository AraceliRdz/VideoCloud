<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Videos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Video Cloud</h3>
            </div>

            <ul class="list-unstyled components">
                <p>¡Bienvenido!</p>
                <li class="active">
                    <a href="index.html">Inicio</a>
                </li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Videos Grabados</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="trigun1.html">Cámara 1</a>
                        </li>
                        <li>
                            <a href="video7.html">Cámara 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="stream.php">Live Stream</a>
                </li>
            </ul>

           <ul class="list-unstyled CTAs">
                <li>
                    <a href="cerrar.php" class="download">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menú</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                           <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="stream.html">Live Stream</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2 align="center">Video Cloud</h2>
            <video width="820" height="440" controls>
<source src="video/Grabaciones/DVR_1_20190605_0024.mp4.mp4" type="video/mp4">
Your browser does not support the video tag.
</video> 
    </div>
    <div class="line"></div>
    
   <main><article>
        <h2>Videos Cámara 1</h2>
        <p> 2019/04/06</p>
      <a href="trigun1.php"><img class="centrado" src="video/Alertas/20190604/1/alert_1_20190604_234409_381.mjpeg.jpg" alt="Capitulo 10"></a>
      <a href="video2.php"><img class="centrado" src="video/Alertas/20190604/1/alert_1_20190604_234343_661.mjpeg.jpg" alt="Capitulo 10"></a>
      <a href="video3.php"><img class="centrado" src="video/Alertas/20190604/1/alert_1_20190604_234511_991.mjpeg.jpg" alt="Capitulo 10"></a>
      <a href="video4.php"><img class="centrado" src="video/Alertas/20190604/1/cam1_20190604_193940_671.mjpeg.jpg" alt="Capitulo 10"></a>
      <a href="video5.php"><img class="centrado" src="video/Alertas/20190604/1/alert_1_20190604_234441_142.mjpeg.jpg" alt="Capitulo 10"></a>
      </article></main>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>