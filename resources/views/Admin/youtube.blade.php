<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <title>Trailers and Clips</title>
    </head>
    <body>
            <nav class="black">
                <div class="nav-wrapper">
                    <div class="nav-wrapper">
                        <div class="container">
                            <a href="#!" class="brand-logo">youtube channel data</a>
                        </div>
                    </div>
                </div>
            </nav>
            <br>
            <section>
                <div class ="container">
                    <p>log In with google</p>
                    <button class="btn red" id="authorize-button">Login</button>
                    <button class="btn red" id="signout-button">Log out</button>
                    <br>
                    <div id="content">
                        <div class="row">
                            <div class="col s6">
                                <form id="channel-form">
                                    <input type="text" id="channel-input">
                                    <input type="submit" value="get Data"id="channel-input" class="btn grey lighten-2">
                                </form>
                            </div>


                            <div id="channel-data"class="col s6">

                            </div>
                            <div class="row" id="channel-input"></div>

                        </div>
                    </div>

                </div>
            </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script src="main.js">    </script>

            <script async defer src="https://apis.google.com/js/api.js"
                    onload="this.onload=function(){};handleClientLoad()"
                    onreadystatechange="if (this.readyState === 'complete') this.onload()">
            </script>
</script>
    <script>

    </script>


    </body>
</html>
