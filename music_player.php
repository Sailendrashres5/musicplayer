<div class="wrapper">
    <div class="song-bar">
        <div class="img-area">
            <img src="./assets/images/default_music_icon.jpg" alt="" />
        </div>
        <div class="song-details">
            <p class="name"></p>
            <p class="artist"></p>
        </div>
        <div class="progress-area">
            <div class="progress-bar">
                <audio id="main-audio" src=""></audio>
            </div>
            <div class="song-timer">
                <span class="current-time">0:00</span>
                <span class="max-duration">0:00</span>
            </div>
        </div>
        <div class="controls">
            <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
            <i id="prev" class="material-icons">skip_previous</i>
            <div class="play-pause">
                <i class="material-icons play">play_arrow</i>
            </div>
            <i id="next" class="material-icons">skip_next</i>
            <i class="fas fa-volume-high" style="color: #ffffff; font-size:23px;" id="volume_btn"></i>

        </div>

    </div>
    <div class="music-list">
        <div class="header">
            <div class="row">
                <i class="list material-icons">queue_music</i>
                <span>Music list</span>
            </div>
            <i id="close" class="material-icons">close</i>
        </div>
        <ul>
            <!-- here li list are coming from js -->
        </ul>
    </div>
</div>

<script src="./assets/js/music.js"></script>