<div class="col-sm-3 col-md-3 songs-div">
    <div>
        <div class="input-group search">
            <input type="text" class="form-control search-bar" placeholder="Search Songs" id="search_query">
            <div class="input-group-btn">
                <button class="btn btn-default search-btn" id="search_song">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </div>
    <img src="images/profile.png" alt="..." class="img-thumbnail profile-image">
    <div>
        <h3 class="username">
            <span class="name">{{name}}</span>
        </h3>
    </div>

    <div class="links" id="sidebar">
        <a><button class="sidebar_button active" id="profile">Profile</button></a>
        <a href='./songs'><button class="sidebar_button" id="all_songs">Songs</button></a>
        <a href='./playlists'><button class="sidebar_button" id="playlist" >Playlists</button></a>
        <a><button class="sidebar_button">Recent Songs</button></a>
        <a href="add_songs.php"><button class="sidebar_button">Add Songs</button></a>
        <a>
            <form method="post" action="index.php">
                <button class="sidebar_button" name="singout">Sign Out</button>
            </form>
        </a>
    </div>
</div>