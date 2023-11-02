    <!-- Header -->
    <?php include 'include/header.php'; ?>


    <!-- Biography banner Section Start -->
    <section class="biography-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="biography-banner-txt">
                        <h4>Musics</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br> Ipsum
                            has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Biography banner Section End -->




    <!-- Audio Player Section Start -->
    <section class="audio-player-sec">
        <div class="container">
            <div class="audio-player">
            <div class="row m-0 pl-0 pr-0">
                <div class="col-lg-6 pl-0 pr-0">
                    <div class="audio-img">
                        <img src="images/song-img.png" alt="">
                    </div>  
                </div>
                <div class="col-lg-6 pl-0 pr-0">
                    <div class="audio-player-txt">
                        <h3>Audio player</h3>
                        <h2>ATHENA - TUATARA - <br> MASTER FIXED ENDING</h2>
                    </div>
                    <div class="audio-line">
                        <input type="range" name="" id="">
                    </div>
                    <div class="music-playerbtns">
                        <a class="refresh-btn" href=""><i class='bx bx-refresh'></i></a>
                        <button href="#" class="previous-btn" onclick="previous_song()" id="pre"><i
                                class="fa fa-step-backward"></i></button>
                        <button href="#" class="play-btn" onclick="justplay()" id="play"><i
                                class="fa fa-play"></i></button>
                        <button href="#" class="previous-btn" onclick="next_song()" id="next"><i
                                class="fa fa-step-forward"></i></button>
                        <a href="#" class="shuffle-btn"><i class='bx bx-shuffle'></i></a>
                    </div>
                    <div class="athena-head">
                        <h2>Athena Park</h2>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Audio Player Section End -->
    
    
    
            <!-- Latest Album Section Start -->
        <section class="music-album">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="music-album-txt">
                            <h3>Listen</h3>
                            <h2>From The Latest Album</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's <br> standard dummy text ever since the </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--<div class="col-lg-4">-->
                    <!--    <div class="music-player">-->
                    <!--        <div class="music-img">-->
                    <!--            <img src="images/music-player.png" alt="">-->
                    <!--            <p id="title">ATHENA - TUATARA -MASTER FIXED ENDING</p>-->
                    <!--        </div>-->
                    <!--        <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">-->
                    <!--            <div class="range-slider">-->
                    <!--                <span class="range-min-wrapper">-->
                    <!--                    <input class="range-min" type="range" min="0" max="100" value="0"-->
                    <!--                        id="duration_slider" onchange="change_duration()">-->
                                        <!-- <span class="range-min-value">0</span> -->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <audio id="track"></audio>-->
                    <!--        <div class="music-playerbtns">-->
                    <!--            <a class="refresh-btn" href=""><i class='bx bx-refresh'></i></a>-->
                    <!--            <button href="#" class="previous-btn" onclick="previous_song()" id="pre"><i-->
                    <!--                    class="fa fa-step-backward"></i></button>-->
                    <!--            <button href="#" class="play-btn" onclick="justplay()" id="play"><i-->
                    <!--                    class="fa fa-play"></i></button>-->
                    <!--            <button href="#" class="previous-btn" onclick="next_song()" id="next"><i-->
                    <!--                    class="fa fa-step-forward"></i></button>-->
                    <!--            <a href="#" class="shuffle-btn"><i class='bx bx-shuffle'></i></a>-->
                    <!--        </div>-->
                    <!--        <h6>Athena Park</h6>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-12">
                        <div class="next-song-player">
                            <div class="next-music-img">
                                <img src="images/sm-next-song-1.png" alt="">
                            </div>
                            <div class="next-song">
                                <p>ATHENA - Dent in My Heart MASTER</p>
                                <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">
                                    <div class="range-slider">
                                        <span class="range-min-wrapper" id="duration_slider"
                                            onchange="change_duration()">
                                            <input class="range-min" type="range" min="0" max="100" value="0">
                                        </span>
                                    </div>
                                </div>
                                <div id="track-time" class="active">
                                    <div id="current-time">00:00</div>
                                    <div id="track-length">05:45</div>
                                </div>
                            </div>
                            <div class="play-pausebtn">
                                <button class="previous-btn" onclick="playSong()" href=""><i
                                        class="fa fa-play"></i></button>
                                <button class="previous-btn" href=""><i class="fa fa-step-forward"></i></button>
                            </div>
                        </div>
                        <div class="next-song-player">
                            <div class="next-music-img">
                                <img src="images/sm-next-song-2.png" alt="">
                            </div>
                            <div class="next-song">
                                <p>ATHENA - Dent in My Heart MASTER</p>
                                <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">
                                    <div class="range-slider">
                                        <span class="range-min-wrapper">
                                            <input class="range-min" type="range" min="0" max="100" value="0"
                                                id="duration_slider" onchange="change_duration()">
                                        </span>
                                    </div>
                                </div>
                                <div id="track-time" class="active">
                                    <div id="current-time">00:58</div>
                                    <div id="track-length">03:45</div>
                                </div>
                            </div>
                            <div class="play-pausebtn">
                                <button class="previous-btn" href=""><i class="fa fa-play"></i></button>
                                <button class="previous-btn" href=""><i class="fa fa-step-forward"></i></button>
                            </div>
                        </div>
                        <div class="next-song-player">
                            <div class="next-music-img">
                                <img src="images/sm-next-song-3.png" alt="">
                            </div>
                            <div class="next-song">
                                <p>ATHENA - Dent in My Heart MASTER</p>
                                <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">
                                    <div class="range-slider">
                                        <span class="range-min-wrapper">
                                            <input class="range-min" type="range" min="0" max="100" value="0"
                                                id="duration_slider" onchange="change_duration()">
                                        </span>
                                    </div>
                                </div>
                                <div id="track-time" class="active">
                                    <div id="current-time">00:00</div>
                                    <div id="track-length">04:45</div>
                                </div>
                            </div>
                            <div class="play-pausebtn">
                                <button class="previous-btn" href=""><i class="fa fa-play"></i></button>
                                <button class="previous-btn" href=""><i class="fa fa-step-forward"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="other-companies">
                            <div class="music-company">
                                <img src="images/spotify.png" alt="">
                            </div>
                            <div class="music-company">
                                <img src="images/amazon.png" alt="">
                            </div>
                            <div class="music-company">
                                <img src="images/google-play.png" alt="">
                            </div>
                            <div class="music-company">
                                <img src="images/itunes.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Album Section End -->
    
    
    




    <!-- Footer -->
    <?php include 'include/footer.php'; ?>
    