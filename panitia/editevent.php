<!doctype html>
<html lang="en">
<?php
    session_start();
    include 'config.php';

    if(!isset($_SESSION['status'])){
        header("location:../login.php");
    }else{
        
?>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Pure Admin Panel</title>

    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                        Pure Admin
                        <a href="login.html" class="pure-button button-xxsmall">OUT &raquo;</a>
                    </p>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item">
                            <a href="dashboard.html" class="pure-menu-link">Dashboard</a>
                        </li>
                        <li class="pure-menu-item">
                            <a href="post-list.html" class="pure-menu-link">Posts List</a>
                        </li>
                        <li class="pure-menu-item pure-menu-selected">
                            <a href="post-form.html" class="pure-menu-link">Post Form</a>
                        </li>
                        <li class="pure-menu-item menu-item-divided">
                            <a href="option-list.html" class="pure-menu-link">Option List</a>
                        </li>
                        <li class="pure-menu-item">
                            <a href="option-form.html" class="pure-menu-link">Option Form</a>
                        </li>
                        <li class="pure-menu-item menu-item-divided">
                            <a href="profile.html" class="pure-menu-link">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Add Your Tournament Info</h1>
                    <aside class="pure-message message-warning">
                        <p><strong>NOTE</strong>: Deskripsikan event anda sedetail mungkin, masukkan deskripsi berupa hadiah,contact person,atau link terkait.</p>
                    </aside>
                    <form action="+event.php" method="post" novalidate autocomplete="off" class="pure-form pure-form-stacked">
                        <fieldset>
                        <h2 id="style-guide" class="content-subhead">Tournament Info</h2>
                            <input type="file" name="gambarEvent" id="gambarEvent">
                            <span class="help-inline">Upload Gambar (Poster,dsb)</span>
                            
                            <label for="title">Nama Event</label>
                            <input id="title" name="namaevent" type="text" placeholder="Masukkan Nama Tournament (Minimum 5 Character)" class="pure-input-1" value="">
                            
                            <label for="venue">Venue</label>
                            <textarea id="content" name="alamat" placeholder="Kosongkan jika tournament dilaksanakan secara online" class="pure-input-1" rows="10"></textarea>
                            
                            <label for="date">Tanggal</label>
                            <input type="date" id="basicinput" class="pure-input-1" name="tanggal">

                            <label class="control-label">Slot/Size</label>
											
							<select tabindex="1" data-placeholder="Select your tournament size.." class="pure-input-1" name="slot">
								<option value="">Select here..</option>
								<option value="2">2</option>
								<option value="4">4</option>
								<option value="8">8</option>
								<option value="16">16</option>
								<option value="32">32</option>
								<option value="64">64</option>
							</select>

                            <h2 id="style-guide" class="content-subhead">Game Info</h2>
                            <label for="namagame">Nama Game</label>
                            <input id="namagame" name="namagame" type="text" placeholder="Nama Game" class="pure-input-1" value="">
                            
                            <label for="ModeGame">Mode</label>
                            <select tabindex="1" data-placeholder="Select mode.." class="pure-input-1" name="mode">
								<option value="">Select mode..</option>
								<option value="1">Online</option>
								<option value="0">Offline</option>
                            </select>
                            
                            <label for="date">Date</label>
                            <input id="date" type="text" placeholder="Date" class="pure-input-1" value="">

                            <label for="content">Content</label>
                            <textarea id="content" class="pure-input-1" rows="10"></textarea>

                            <label for="status">Status</label>
                            <select id="status" class="pure-input-1">
                                <option value="1">Passive</option>
                                <option value="2">Draft</option>
                                <option value="3">Awaiting</option>
                                <option value="4">Active</option>
                            </select>

                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="pure-button button-success">Save</button>
                        </fieldset>
                    </form>
                </div>

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">PURE CSS</a></li>
                            <li class="pure-menu-item"><a href="http://fikiruretgeci.com" class="pure-menu-link">FIKIR URETGECI</a></li>
                            <li class="pure-menu-item"><a href="http://pure-themes.com" class="pure-menu-link">PURE THEMES</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    }
?>
</html>
