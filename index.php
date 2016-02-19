<!doctype html>
<html>
    <head>
        <title>Visor Qr</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/src/grid.js"></script>
        <script type="text/javascript" src="js/src/version.js"></script>
        <script type="text/javascript" src="js/src/detector.js"></script>
        <script type="text/javascript" src="js/src/formatinf.js"></script>
        <script type="text/javascript" src="js/src/errorlevel.js"></script>
        <script type="text/javascript" src="js/src/bitmat.js"></script>
        <script type="text/javascript" src="js/src/datablock.js"></script>
        <script type="text/javascript" src="js/src/bmparser.js"></script>
        <script type="text/javascript" src="js/src/datamask.js"></script>
        <script type="text/javascript" src="js/src/rsdecoder.js"></script>
        <script type="text/javascript" src="js/src/gf256poly.js"></script>
        <script type="text/javascript" src="js/src/gf256.js"></script>
        <script type="text/javascript" src="js/src/decoder.js"></script>
        <script type="text/javascript" src="js/src/qrcode.js"></script>
        <script type="text/javascript" src="js/src/findpat.js"></script>
        <script type="text/javascript" src="js/src/alignpat.js"></script>
        <script type="text/javascript" src="js/src/databr.js"></script>
        <script src="js/html5-qrcode-master/lib/html5-qrcode.min.js"></script>
        <script>
            $('#reader').html5_qrcode(function (data) {
                // do something when code is read
            },function (error) {
                        //show read errors 
            }, function (videoError) {
                //the video stream could be opened
            });
        </script>
    </head>

    <body>
        <div id="reader" style="width:300px;height:250px; border: 1px solid #000;">
        </div>
    </body>
</html>
