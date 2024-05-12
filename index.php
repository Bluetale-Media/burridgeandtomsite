<!DOCTYPE html>
<html lang="en">
<head>
  <title>Burridge and Tom by Bluetale Media</title>
  <meta charset="UTF-8">
  <meta name="description" content="Burridge and Tom is the flagship podcast brought to you by Bluetale Media.">
  <meta name="keywords" content="Burridge, Tom, Podcast, Bluetale">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body {font-family: "Lato", sans-serif}
  </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="navBar()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
    <a href="#thehosts" class="w3-bar-item w3-button w3-padding-large w3-hide-small">The Hosts</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navBar" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="navBar()">About</a>
  <a href="#thehosts" class="w3-bar-item w3-button w3-padding-large" onclick="navBar()">The Hosts</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Podcast -->
  <div class="w3-blue-grey" id="about">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <h1 class="w3-wide">Burridge and Tom by <a href="https://bluetale.media" target="_blank">Bluetale Media</a></h1>
      <h2 class="w3-wide">About: Rambling On</h2>
      <p class="w3-justify">The podcast that started it all: Burridge and Tom Rambling on, is the spiritual successor to our first foray into podcasting: Burridge and Tom Talk Tech. After a nearly two-year hiatus, we returned and continued getting as off-topic as ever, hence the new name!</p>
      <p class="w3-justify">While “Rambling On” focuses on technology and games, we often dive into other topics, ranging from the current political climate to deep space exploration. This podcast aims to highlight some of the things in new technology we are most excited about and cover areas of the industry that are less than perfect.</p>
      <p class="w3-justify">From time to time, we also host special events, either as bonus episodes or in the place of regular episodes, including an annual quiz and coverage of industry keynotes.</p>
      <p class="w3-justify">As we continue into 2024 we are returning for a "Season 3" of the podcast. Less scripts, more discussion AND in person!</p>
      <iframe src="https://embed.acast.com/622f5d197d6c0600124e3e32?feed=true" frameBorder="0" width="100%" height="380px"></iframe>
    </div>
  </div>
  
  <!-- The Duo -->
  <div class="w3-indigo" id="thehosts">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <div class="w3-row w3-padding-32">
        <h2 class="w3-wide w3-center">Meet your Hosts</h2>
        <p class="w3-justify"></p>
        <div class="w3-half">
          <div class="w3-card-4 w3-light-grey" style="width:80%">
            <img src="images/burridgedan.jpg" alt="burridgedan" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-center">
              <p>burridgedan</p>
            </div>
          </div>
        </div>
        <div class="w3-half">
          <div class="w3-card-4 w3-light-grey" style="width:80%">
            <img src="images/taspeed.jpg" alt="taspeed" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-center">
              <p>Taspeed</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://open.spotify.com/show/58aXujSrSZ1FcOdpulI7Fe" target="_blank"><i class="fa-brands fa-spotify w3-hover-opacity"></i></a>
  <a href="https://bsky.app/profile/burridgeandtom.com" target="_blank"><i class="fa-brands fa-bluesky w3-hover-opacity"></i></a>
  <a href="https://twitter.com/burridgeandtom" target="_blank"><i class="fa-brands fa-x-twitter w3-hover-opacity"></i></a>
  <a href="https://youtube.com/@burridgeandtom" target="_blank"><i class="fa-brands fa-youtube w3-hover-opacity"></i></a>
  <a href="https://www.tiktok.com/@burridgeandtom" target="_blank"><i class="fa-brands fa-tiktok w3-hover-opacity"></i></a>
  <a href="https://discord.com/invite/wg3XaQgttx" target="_blank"><i class="fa-brands fa-discord w3-hover-opacity"></i></a>
  <a href="https://patreon.com/burridgeandtom" target="_blank"><i class="fa-brands fa-patreon w3-hover-opacity"></i></a>
  <p class="w3-medium">Copyright &copy; 2019 - <?php echo date("Y"); ?> <a href="https://bluetale.media" target="_blank">Bluetale Media</a></p>
</footer>

<!-- Page Scripts -->
<script src="/functions.js" ></script>
</body>
</html>
