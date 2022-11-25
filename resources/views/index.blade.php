<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('leaflet-location-picker/src/leaflet-locationpicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('leaflet-location-picker/dist/leaflet-locationpicker.src.css')}}"/>
    <link rel="stylesheet" href="//unpkg.com/leaflet@1.1.0/dist/leaflet.css"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>


<form action="">
    <div class="flex flex-row">
        <input class="example" type="text" value="35.685884,51.389236"/>

        <div id="mapContainer" class="w-1/2 pt-16 absolute m-auto"></div>
    </div>
</form>


<script src="{{asset('jquery-3.6.1.min.js')}}"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{asset('leaflet-location-picker/src/leaflet-locationpicker.js')}}"></script>

<script>
    $('.example').leafletLocationPicker({
        alwaysOpen: true,
        mapContainer: "#mapContainer",
        locationMarker:true,

        onChangeLocation:function(e) {
            ///DO this
        }

    }) ;

</script>
</body>
</html>
