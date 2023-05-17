<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>VINHMORE THAN</title>
<meta property="og:title" content="VINHMORE THAN">
<meta property="og:url" content="https://pnrtscr.com/w8q2qq">
<meta property="og:site_name" content="Lightshot">
<meta property="og:image" content="https://pnrtscr.com/lightshot.png">
<meta property="og:description" content="Captured with Lightshot">
<meta property="og:type" content="website">
<meta name="twitter:card" content="photo">
<meta name="twitter:title" content="VINHMORE THAN">
<meta name="twitter:site" content="@light_shot">
<meta name="twitter:description" content="Captured with Lightshot">
<meta name="twitter:image:src" content="https://pnrtscr.com/lightshot.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;900&display=swap" rel="stylesheet">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-JFD7V6BJLP"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-JFD7V6BJLP');
  </script>
<style type="text/css">
  p {
    margin: 0;
  }

  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  .overlay,
  .scare {
    position: fixed;

    top: 0;
    left: 0;

    height: 100vh;
    width: 100vw;
  }

  p.overlay-title {
    font-size: 24px;
    font-weight: 900;
    color: black;
    line-height: 1;

    margin-bottom: 16px;
  }

  .overlay-button {
    display: inline-flex;
    align-items: center;

    height: 40px;

    padding-right: 24px;
    padding-left: 24px;

    font-size: 16px;
    font-weight: 500;
    line-height: 1;

    border-radius: 4px;

    margin: 4px;

    cursor: pointer;
  }

  .overlay-buttons-wrapper {
    margin: 24px -8px -8px;
  }

  #accept-button {
    background-color: rgb(132, 94, 194);

    color: white;
  }

  #decline-button {
    color: rgb(132, 94, 194);

    border: 2px solid rgb(132, 94, 194);
  }

  p.overlay-description {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.5);
    line-height: 1.25;

    margin-bottom: 16px;
  }

  a.overlay-link {
    display: inline-block;

    text-decoration: none;

    font-size: 16px;
    font-weight: 500;
    color: rgb(132, 94, 194);
    line-height: 1;

    position: relative;

    margin-top: 16px;
  }

  a.overlay-link::before {
    position: absolute;

    content: "";

    height: calc(50% + 4px);
    width: calc(100% + 8px);

    bottom: -4px;
    left: -4px;

    background-color: rgba(132, 94, 194, 0.1);
  }

  .overlay-body {
    max-width: 512px;

    text-align: center;

    font-family: "Inter", sans-serif;
  }

  .overlay[hidden] {
    display: none;
  }

  .overlay {
    z-index: 2;

    display: flex;
    align-items: center;
    justify-content: center;

    background-color: #f5f6fa;

    padding-right: 24px;
    padding-left: 24px;
  }

  .scare {
    z-index: 1;
  }

  video#video {
    height: 100%;
    width: 100%;

    object-fit: cover;
  }

  video#video::-webkit-media-controls-enclosure {
    display: none !important;
  }
  </style>
</head>
<body>
<div id="overlay" class="overlay">
<div class="overlay-body">
<p class="overlay-title">Bạn có chắc sẽ sài hệ thống này ?</p>
<p class="overlay-description">Nếu chắc bấm nút có</p>
<p class="overlay-description">Còn không muốn bấm nút không</b>.</p>
<div class="overlay-buttons-wrapper">
<div id="accept-button" class="overlay-button">Có</div>
<div id="decline-button" class="overlay-button">Không</div>
</div>
</div>
</div>
<div class="scare">
<video id="video" class="video" src="/dangyeu.mp4" loop></video>
</div>
<script type="text/javascript">
  const video = document.getElementById("video");
  const overlay = document.getElementById("overlay");
  const declineButton = document.getElementById("decline-button");
  const acceptButton = document.getElementById("accept-button");

  let hasClicked;

  window.onbeforeunload = function() {
    if (hasClicked) return true;
  };

  function buttonClick(event) {
    event.preventDefault();
    gtag('event', 'scare_button_click', {
      'element_id': event.target.id
    });
    if (!hasClicked) hasClicked = true;
    overlay.hidden = true;
    video.play();
    videoClick();
  }

  function videoClick(event) {
    if (event) event.preventDefault();

    gtag('event', 'scare_fullscreen', {
      'from_button': !event
    });
    // if not fullscreen
    const {
      documentElement
    } = document;
    if (documentElement.requestFullscreen) documentElement.requestFullscreen();
    else if (documentElement.mozRequestFullScreen) documentElement.mozRequestFullScreen();
    else if (documentElement.webkitRequestFullscreen) documentElement.webkitRequestFullscreen();
    else if (documentElement.msRequestFullscreen) documentElement.msRequestFullscreen();
  }

  acceptButton.addEventListener("click", buttonClick);
  declineButton.addEventListener("click", buttonClick);
  video.addEventListener("click", videoClick);
  </script>
  <script>
  setTimeout(function () {
     window.location="/code.php";
  },13000); // 13 seconds
  </script>
</body>
</html>