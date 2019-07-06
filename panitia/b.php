<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Pure Admin Panel</title>

    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="bracket/jquery.bracket.min.css" rel="stylesheet"/>
    
</head>
<body>
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
                        <li class="pure-menu-item pure-menu-selected">
                            <a href="post-list.html" class="pure-menu-link">Posts List</a>
                        </li>
                        <li class="pure-menu-item">
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
                    <h1 class="subhead">Bracket </h1>
                    <div class="demo">

                    </div>

                </div>


                <div class="items">
                    <h1 class="subhead">Post List <a class="pure-button button-small button-secondary" href="post-form.html">Add New</a></h1>

                    <aside class="pure-message message-success">
                        <p><strong>SUCCESS</strong>: Success message.</p>
                    </aside>
                    <aside class="pure-message message-error">
                        <p><strong>ERROR</strong>: Error message.</p>
                    </aside>
                    <aside class="pure-message message-warning">
                        <p><strong>WARNING</strong>: Warning message.</p>
                    </aside>

                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Post Name 1</td>
                            <td>2018-01-13 Friday at 10:00 AM</td>
                            <td>Active</td>
                            <td>
                                <a class="pure-button button-small button-secondary" href="#">View</a>
                                <a class="pure-button button-small button-success" href="post-form.html">Edit</a>
                                <a class="pure-button button-small button-error" href="#" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Post Name 2</td>
                            <td>2018-01-13 Friday at 10:00 AM</td>
                            <td>Draft</td>
                            <td>
                                <a class="pure-button button-small button-secondary" href="#">View</a>
                                <a class="pure-button button-small button-success" href="post-form.html">Edit</a>
                                <a class="pure-button button-small button-error" href="#" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="navigation">
                    <div class="pure-button-group">
                        <a href="#" class="pure-button">Prev</a>
                        <a href="#" class="pure-button">Next</a>
                    </div>
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
 <!-- ////////////////////////////////////////////////////////////////// -->
        
        <script src="../bracket/jquery.min.js"></script>
        <script src="../bracket/jquery.bracket.min.js"></script>
        <script>
                    /* Custom data objects passed as teams */
                    var customData = {
                        teams : [
                        [{name: "Team 1"}, {name: "Team2"}],
                        [{name: "Team 3"}, {name: "Team 4"}]
                        ],
                        results : []
                    }
                        
                    /* Edit function is called when team label is clicked */
                        function edit_fn(container, data, doneCb) {
                        var input = $('<input type="text">')
                        input.val(data ? data.name : '')
                        container.html(input)
                        input.focus()
                        input.blur(function() {
                            var inputValue = input.val()
                            if (inputValue.length === 0) {
                            doneCb(null);
                            } else {
                            var AndName = inputValue.split(':') // Expects correct input
                            doneCb({name: AndName[0]})
                            }
                        })
                        }
                        
                    /* Render function ini dipanggil ketika label team di rubah
                        *
                        * 'state' berisi:
                        * - empty-bye: No data or score and there won't team advancing to this place
                        * - empty-tbd: No data or score yet. A team will advance here later
                        * - entry-no-score: Data available, but no score given yet
                        * - entry-default-win: Data available, score will never be given as opponent is BYE
                        * - entry-complete: Data and score available
                    */
                    function render_fn(container, data, score, state) {
                    switch(state) {
                    case "empty-bye":
                    container.append("No team")
                    return;
                    case "empty-tbd":
                    container.append("Upcoming")
                    return;
                     
                    case "entry-no-score":
                    case "entry-default-win":
                    case "entry-complete":
                    container.append(data.name)
                    return;
                    }
                    }
                        
                    $(function() {
                    $('.demo').bracket({ //tambahclickfuntion u/ trigger generator
                        init: customData,
                        disableToolbar: true,
                        disableTeamEdit: true,
                        save: function(){}, 
                        decorator: {edit: edit_fn,
                                    render: render_fn}})
                    })
        </script> 
</body>
</html>
