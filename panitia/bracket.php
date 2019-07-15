<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include 'config.php';
    $id =$_GET['detail'];
    $sql     ="select * from event where idEvent='$id'";
    $que     = mysqli_query($konak,$sql);
    $res     = mysqli_fetch_array($que);
    $tes     = $res['uplink'];
    if(!isset($_SESSION['status'])){
        header("location:../login.php");
    }else if($_SESSION['id_panitia']!=$tes){
        echo "Can't Do That, We will redirect you back"; ?> <span id="counter">3</span> second(s).</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=0) {
                    location.href = 'index.php';
                }
                i.innerHTML = parseInt(i.innerHTML)-1;
            }
            setInterval(function(){ countdown(); },1000);
        </script>
    <?php 
    }else{
        
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>RAOT EVENT ORGANIZER</title>

    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="bracket/jquery.bracket.min.css" rel="stylesheet"/>
    
    
</head>
<body>
<?php include 'header.php' ?>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">Bracket - <?php echo $res['nm_event']; ?></h1>
                    <div class="demo">

                    </div>
                    
                    <div class="navigation">
                    
                    <a id="post" class="btn span4 btn-primary" onclick="function()">POST</a>
                    
                </div>

                </div>


                <div class="items">
                <div class="output">

                    <pre id="output">Try to first modify some scores or teams</pre>

                </div>
                    <h1 class="subhead">Participant List </h1>
                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Tim</th>
                            <th>Nama Pendaftar</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <?php
                            $sql     = "SELECT event.idEvent, event.nm_event, daftarevent.status, daftarevent.id_user, panitia.nama, panitia.nick, daftarevent.tim

                            FROM daftarevent JOIN panitia
                            
                            ON daftarevent.id_user = panitia.id_panitia
                            
                            JOIN event
                            
                            ON event.idEvent = daftarevent.id_event
                            
                            WHERE event.idEvent = $id AND daftarevent.status= '1'";
                            $que     = mysqli_query($konak,$sql);
                            $r=0;
                            $json_arr=array();
                            $nm=$res['idEvent'];
                            $fo=fopen("filejson/json$nm.json","w");//create direktori json sesuai dengan idevent
                            while ($res=mysqli_fetch_array($que)){
                            $r++;
                            $row_arr = $res['tim'];
                            array_push($json_arr,$row_arr);
                        ?>

                        <tbody>
                        <tr>
                        <td>
                            <?php echo $r; ?></td>
							<td><?php echo $res['tim']; ?></td>
						    <td><?php echo $res['nama']; ?></td>
                            <td><?php echo $res['nick']; ?></td>
                        </tr>
                        </tbody>
                        <?php
                            }
                            $json=json_encode($json_arr);
                            $fr=fwrite($fo,$json);  
                                
                        ?>
                    </table>
                </div>

                <div class="navigation">
                    
                    <a id="btn" class="btn span4 btn-primary" onclick="function()">GENERATE</a>
                    
                </div>

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link">RAOT EVENT ORGANIZER</a></li>
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
                    var databra;
                    function shuffle(array) { ///FUNCTION RANDOM NUMBER
                            var currentIndex = array.length, temporaryValue, randomIndex;
                          
                            // While there remain elements to shuffle...
                            while (0 !== currentIndex) {
                          
                              // Pick a remaining element...
                              randomIndex = Math.floor(Math.random() * currentIndex);
                              currentIndex -= 1;
                          
                              // And swap it with the current element.
                              temporaryValue = array[currentIndex];
                              array[currentIndex] = array[randomIndex];
                              array[randomIndex] = temporaryValue;
                            }
                          
                            return array;
                          }
                          
                          var nm=<?php echo($id);?>; //ambil idevent
                          var posisi ="filejson/json"+nm+".json"; //posisifilejson
                          var arr = JSON.parse($.getJSON({'url': posisi, 'async': false}).responseText);
                          //var arr = [ 'Team 1', 'Team 2', 'Team 3','Team 4','Team 5','Team 6','Team 7','Team 8'];
                          arr = shuffle(arr);
                        
                    var customData = {
                        teams : [
                        [{name: arr[0]}, {name: arr[1]}],
                        [{name: arr[2]}, {name: arr[3]}],
                        [{name: arr[4]}, {name: arr[5]}],
                        [{name: arr[6]}, {name: arr[7]}]
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

                    
                    function saveFn(data, userData) {
                    var json = jQuery.toJSON(data)
                    $('.output').text('POST '+userData+' '+json)
                    jQuery.ajax("rest/"+userData, {contentType: 'application/json',
                                                    dataType: 'json',
                                                    type: 'post',
                                                    data: json})
                    }
                    
                    document.getElementById ("post").addEventListener("click", function() {
                        //init: customData,
                        //save: saveFn,
                        //userData: "http://myapi"
                        //var data = container.bracket('data')
                         $('.output').text("save success")

                    })
                        
                    document.getElementById ("btn").addEventListener("click", function() { //trigger bracket
                    //$(function() {    
                        var container = $('.demo')
                        container.bracket({
                        init: customData,
                        disableToolbar: true,
                        disableTeamEdit: true,
                        save: saveFn,
                        userData: "http://myapi",
                        decorator: {edit: edit_fn,
                                    render: render_fn}})
                    
                        /* current data */
                        var databra = container.bracket('data')
                        $('#dataOutput').text(jQuery.toJSON(data))
                    })
                    /* $('.demo').bracket({
                        init: customData,
                        disableToolbar: true,
                        disableTeamEdit: true,
                        save: saveFn,
                        userData: "/filejson/json13", 
                        decorator: {edit: edit_fn,
                                    render: render_fn}})
                        databra = container.bracket('data')
                        $('#dataOutput').text(jQuery.toJSON(databra))
                    }) */
                    
                    /* $("post").click(function(){
                            var json = jQuery.toJSON(databra)
                            $(".output").text('POST '+json)
                        }) */

                    
        </script> 
</body>
<?php
    }
?>
</html>