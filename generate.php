<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Elimination Tournaments</title>
    <link href="bracket/jquery.bracket.min.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="demo">
        
    </div>
            <!-- BAGAN START -->
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