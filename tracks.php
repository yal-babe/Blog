﻿
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tracks - 一杯香梨</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- Js -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <script src="style/js/jquery.min.js"></script>
    <script src="style/js/tether.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <link href="style/css/style.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="style/images/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!-- BG -->
    <div class="bg">
        <div class="wbg"></div>
        <video preload="auto" autoplay="" loop="">
            <source src="Tpl/Individual/Style/img/bg.mp4" type="video/mp4">
        </video>
    </div>
    <!-- Header -->
    <div class="nav">
        <a class="logo" href="index.html"><img src="style/images/logo.jpg" width="40" title="一杯香梨"></a>
        
    </div>
    <div class="container">
        <section class="index-travel">
            <h2>我们在这个世界留下的足迹</h2>
            <h3>Our footprints in the world</h3>
            <div id="map" class="index-travel-world">
                <div style="margin: 0px auto;position: relative; cursor: default;">
                    <canvas width="1200" height="600" style="width: 1200px; height: 600px; position: absolute; top: 0px; left: 0px;"></canvas>
                    <canvas width="1200" height="600" style="width: 1200px; height: 600px; position: absolute; top: 0px; left: 0px;"></canvas>
                    <canvas width="1200" height="600" style="width: 1200px; height: 600px; position: absolute; top: 0px; left: 0px;"></canvas>
                    <canvas width="1200" height="600" style="width: 1200px; height: 600px; position: absolute; top: 0px; left: 0px;"></canvas>
                </div>

                

            </div>



        </section>
        <script>
        (function(root) {
            var grid = {
                "1": [39, 40, 41, 42, 43, 50, 51, 52, 53, 54, 55],
                "2": [37, 38, 39, 40, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 68, 69, 88, 89, 90],
                "3": [37, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 66, 67, 68, 69, 92, 93, 94, 95],
                "4": [44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 79, 80, 89, 90, 91, 92, 93, 94, 95, 107],
                "5": [24, 25, 34, 35, 36, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 79, 83, 84, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 107, 108, 109],
                "6": [6, 7, 8, 9, 10, 11, 12, 13, 14, 16, 17, 18, 19, 20, 23, 24, 26, 30, 36, 37, 38, 44, 45, 46, 47, 48, 49, 50, 51, 52, 67, 68, 69, 70, 71, 72, 73, 81, 82, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121],
                "7": [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 32, 37, 38, 43, 44, 45, 46, 47, 48, 49, 66, 67, 68, 69, 70, 71, 72, 73, 74, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124],
                "8": [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 35, 36, 37, 43, 44, 45, 46, 53, 54, 55, 65, 66, 67, 68, 69, 70, 71, 72, 73, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 126],
                "9": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 36, 43, 44, 45, 63, 64, 65, 66, 67, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125],
                "10": [1, 2, 3, 4, 5, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 33, 34, 44, 63, 64, 65, 66, 67, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 121, 122, 123],
                "11": [1, 2, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 32, 33, 34, 35, 36, 65, 66, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 120, 121],
                "12": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 32, 33, 34, 35, 36, 59, 64, 65, 66, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 121, 122],
                "13": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 30, 31, 32, 33, 34, 35, 36, 37, 38, 57, 58, 60, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 121, 122],
                "14": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 30, 31, 32, 33, 34, 35, 36, 37, 38, 57, 59, 60, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117],
                "15": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 37, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 118],
                "16": [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 37, 38, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118],
                "17": [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 74, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116],
                "18": [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 57, 58, 60, 61, 62, 63, 65, 67, 68, 69, 70, 71, 72, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 119, 120],
                "19": [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 57, 58, 59, 60, 61, 66, 69, 70, 71, 72, 74, 75, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115],
                "20": [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 56, 57, 58, 59, 60, 64, 67, 69, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 114, 120],
                "21": [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 57, 58, 59, 66, 70, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 114, 115, 120],
                "22": [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 60, 61, 62, 63, 64, 71, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 115, 116, 118, 119, 120],
                "23": [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 57, 58, 59, 60, 61, 62, 63, 64, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112],
                "24": [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 69, 70, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113],
                "25": [9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 23, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114],
                "26": [9, 11, 12, 13, 14, 15, 16, 23, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 76, 77, 78, 79, 80, 81, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113],
                "27": [11, 12, 13, 14, 15, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 77, 78, 79, 80, 81, 82, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113],
                "28": [10, 12, 13, 14, 15, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 114],
                "29": [12, 13, 14, 15, 20, 24, 25, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 78, 79, 80, 81, 82, 83, 84, 85, 86, 92, 93, 94, 95, 96, 97, 98, 99, 102, 103, 104, 105, 106, 107, 108, 109, 110],
                "30": [12, 13, 14, 15, 16, 19, 20, 27, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 78, 79, 80, 81, 82, 83, 84, 85, 86, 93, 94, 95, 96, 97, 98, 103, 104, 105, 106, 107],
                "31": [14, 15, 16, 17, 18, 19, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 79, 80, 81, 82, 83, 84, 85, 93, 94, 95, 96, 97, 103, 104, 105, 106, 107, 108, 115],
                "32": [17, 18, 19, 20, 21, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 80, 81, 82, 83, 84, 94, 95, 96, 105, 106, 107, 108, 109, 115],
                "33": [18, 19, 20, 21, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 94, 95, 96, 105, 106, 107, 108, 109, 116],
                "34": [20, 21, 26, 28, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 95, 96, 105, 107, 108, 109, 110, 117],
                "35": [21, 25, 26, 27, 28, 29, 30, 31, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 95, 96, 105, 108, 114, 116],
                "36": [22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 97, 106, 117, 118],
                "37": [24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 55, 56, 57, 58, 59, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 106, 107, 114],
                "38": [24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 105, 107, 112, 113, 114],
                "39": [23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 105, 106, 107, 111, 112, 113, 114, 119],
                "40": [23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 106, 107, 111, 112, 113, 114, 115, 119],
                "41": [23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 107, 108, 111, 112, 113, 115, 116, 121, 123, 124],
                "42": [23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 107, 108, 115, 116, 122, 123, 124, 125, 126, 130],
                "43": [23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 109, 124, 125, 126, 127, 129, 131],
                "44": [24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 111, 112, 124, 125, 126, 127, 128],
                "45": [24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 117, 128, 129],
                "46": [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 121, 122, 125],
                "47": [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 82, 118, 120, 121, 125, 126],
                "48": [26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 81, 82, 117, 118, 119, 120, 121, 122, 125, 126],
                "49": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 80, 81, 82, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 141],
                "50": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 80, 81, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 134],
                "51": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 67, 68, 69, 70, 71, 72, 73, 74, 75, 80, 81, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 135],
                "52": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 67, 68, 69, 70, 71, 72, 73, 74, 75, 80, 81, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128],
                "53": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 67, 68, 69, 70, 71, 72, 73, 74, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128],
                "54": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 67, 68, 69, 70, 71, 72, 73, 74, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128],
                "55": [28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 68, 69, 70, 71, 72, 73, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128],
                "56": [29, 30, 31, 32, 33, 34, 35, 36, 37, 68, 69, 70, 71, 72, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127],
                "57": [29, 30, 31, 32, 33, 34, 35, 36, 68, 69, 70, 71, 111, 112, 113, 119, 121, 122, 123, 124, 125, 126],
                "58": [29, 30, 31, 32, 33, 34, 35, 121, 122, 123, 124, 125],
                "59": [29, 30, 31, 32, 33, 34, 35, 121, 122, 123, 124, 136],
                "60": [29, 30, 31, 32, 33, 135],
                "61": [30, 31, 32, 122, 133],
                "62": [30, 31, 32, 131, 132],
                "63": [30, 31, 32, 129, 130],
                "64": [30, 31, 32, 33],
                "65": [31, 32],
                "66": [32, 36],
                "67": [33, 34]
            }
            var grid_y = 142;
            var grid_x = 71
            var activeX = activeY = mouseX = 0;
            var eventX = eventY = mouseY = 0;

            var content, tips, ctxMap, ctxActivePoint, ctxPoint, ctxWave;
            var gridWidth, gridHeight, canvasWidth, canvasHeight;
            var pixelRatio;

            var eventPoints = {};

            var wave = (function() {
                var radius = 0;
                return function() {
                    var pos = false;
                    for (var i in eventPoints) {
                        var eventPOS = i.split('_');
                        if (eventX == eventPOS[0] && eventY == eventPOS[1]) {
                            pos = eventPOS;
                        }
                    }

                    ctxWave.globalCompositeOperation = 'destination-out';
                    ctxWave.fillStyle = 'rgba(0, 0, 0, .08)';
                    ctxWave.fillRect(0, 0, ctxWave.canvas.width, ctxWave.canvas.height);
                    ctxWave.globalCompositeOperation = 'lighter';

                    ctxWave.lineWidth = 1;

                    if (pos) {
                        ctxWave.strokeStyle = 'rgba(0,255,0,0.3)';
                        var x = pos[0] * gridWidth + gridWidth / 2.5 / 2;
                        var y = pos[1] * gridHeight + gridHeight / 2.5 / 2;
                        ctxWave.beginPath();
                        ctxWave.arc(x, y, radius, 0, Math.PI * 2);

                        radius += 0.2;
                    } else {
                        ctxWave.strokeStyle = 'rgba(255,255,255,0.1)';
                        ctxWave.beginPath();
                        for (var i in eventPoints) {
                            var _pos = i.split('_');
                            var x = _pos[0] * gridWidth + gridWidth / 2.5 / 2;
                            var y = _pos[1] * gridHeight + gridHeight / 2.5 / 2;
                            ctxWave.moveTo(x + radius, y);
                            ctxWave.arc(x, y, radius, 0, Math.PI * 2);
                        }
                        radius += 0.1;
                    }
                    ctxWave.stroke();

                    if (radius > 15) {
                        radius = 0;
                    }

                    requestAnimationFrame(wave);
                }
            })();

            function showInfo(x, y) {
                var index = x + '_' + y;
                var data = eventPoints[index];
                if (data) {
                    var str = [];
                    for (var i in data) {
                        str.push('<div>' + data[i].title + '</div>');
                    }
                    tips.innerHTML = str.join('');
                    var contentPos = content.getBoundingClientRect();
                    var contentLeft = contentPos.left;
                    var contentTop = contentPos.top;
                    var x = contentLeft + Math.round(x * gridWidth + gridWidth / 2.5 / 2);
                    var y = contentTop + Math.round(y * gridHeight + gridWidth / 2.5 / 2);
                    tips.style.display = 'block';
                    x = x - tips.offsetWidth / 2;
                    y = y - tips.offsetHeight - 10;
                    _x = x + (document.documentElement.scrollLeft || document.body.scrollLeft) + 'px';
                    _y = y + (document.documentElement.scrollTop || document.body.scrollTop) + 'px';
                    // console.log(y, _y, document.documentElement.scrollTop, document.body.scrollTop)
                    tips.style.left = _x;
                    tips.style.top = _y;
                    content.style.cursor = 'pointer';
                }
            };

            function hideInfo() {
                tips.style.display = 'none';
                content.style.cursor = 'default';
            };

            function app(dom, config) {
                var box = document.getElementById(dom);
                var boxWidth = box.clientWidth;

                var width = canvasWidth = boxWidth > 1200 ? 1200 : boxWidth;
                var height = canvasHeight = width / 2;

                gridWidth = width / grid_y;
                gridHeight = height / grid_x;

                tips = document.createElement('div');
                var tipsStyle = [
                    'position: absolute;',
                    'top: 0;',
                    'left: 0;',
                    'background: rgba(0, 0, 0, 0.5);',
                    'color: #eeeeee;',
                    'padding: 4px 10px;',
                    'border-radius: 4px;',
                    'z-index: 10000;',
                    'white-space: nowrap;',
                    'text-align: center;'
                ]
                tips.setAttribute('style', tipsStyle.join(''));
                document.body.appendChild(tips);

                var _box = content = document.createElement('div');
                _box.style.margin = '0px auto';
                _box.style.width = width + 'px';
                _box.style.height = height + 'px';
                _box.style.position = 'relative';
                box.appendChild(_box);

                ctxMap = canvasGenerate();
                ctxActivePoint = canvasGenerate();
                ctxWave = canvasGenerate();
                ctxPoint = canvasGenerate();

                _box.addEventListener('mousemove', function(e) {
                    var width = ctxActivePoint.canvas.width / pixelRatio / grid_y;
                    var height = ctxActivePoint.canvas.height / pixelRatio / grid_x;
                    var x = mouseX = e.offsetX;
                    var y = mouseY = e.offsetY;
                    activeX = eventX = Math.floor(x / width);
                    activeY = eventY = Math.floor(y / height);
                    drawActivePoint();
                    drawEventPoint();
                });

                _box.addEventListener('click', function(e) {
                    var width = ctxActivePoint.canvas.width / pixelRatio / grid_y;
                    var height = ctxActivePoint.canvas.height / pixelRatio / grid_x;
                    var x = e.offsetX;
                    var y = e.offsetY;
                    activeX = Math.floor(x / width);
                    activeY = Math.floor(y / height);
                    console.log(activeX, activeY);
                });

                drawMap();

                wave();
            };

            // generate canvas
            function canvasGenerate() {
                var canvas = document.createElement('canvas');
                canvas.width = canvasWidth;
                canvas.height = canvasHeight;
                canvas.style.width = canvasWidth + 'px';
                canvas.style.height = canvasHeight + 'px';
                canvas.style.position = 'absolute';
                canvas.style.top = '0px';
                canvas.style.left = '0px';
                content.appendChild(canvas)
                var ctx = canvas.getContext('2d');
                adjustRatio(ctx)
                return ctx;
            };

            // draw basic map
            function drawMap() {
                ctxMap.clearRect(0, 0, ctxMap.canvas.width, ctxMap.canvas.height);
                ctxMap.fillStyle = '#87bce1'
                    // console.log(ctxMap.)
                for (var i = 1; i < grid_x; i++) {
                    if (grid[i]) {
                        for (var j in grid[i]) {
                            var x = Math.round(grid[i][j] * gridWidth);
                            var y = Math.round(i * gridHeight);
                            var w = Math.round(gridWidth / 2.5);
                            var h = Math.round(gridHeight / 2.5);
                            var x = grid[i][j] * gridWidth;
                            var y = i * gridHeight;
                            var w = gridWidth / 2.5;
                            var h = gridHeight / 2.5;
                            ctxMap.rect(x, y, w, h);
                        }
                    }
                }
                ctxMap.fill();
            };

            // draw active point
            function drawActivePoint() {
                ctxActivePoint.fillStyle = '#87BCE1';
                ctxActivePoint.clearRect(0, 0, ctxMap.canvas.width, ctxMap.canvas.height);
                if (grid[activeY]) {
                    var isX = grid[activeY].indexOf(activeX);
                    if (isX != -1) {
                        var x = Math.round((activeX * gridWidth) - (gridHeight / 2) / 2);
                        var y = Math.round((activeY * gridHeight) - (gridWidth / 2) / 2);
                        ctxActivePoint.beginPath();
                        ctxActivePoint.rect(x, y, gridWidth, gridHeight);
                        ctxActivePoint.fill();
                    }
                }
            };

            // draw event point 
            function drawEventPoint() {
                var hover = false;
                ctxPoint.clearRect(0, 0, ctxPoint.canvas.width, ctxPoint.canvas.height);
                for (var i in eventPoints) {
                    var pos = i.split('_');
                    var x = Math.round(pos[0] * gridWidth + gridWidth / 2.5 / 2);
                    var y = Math.round(pos[1] * gridHeight + gridWidth / 2.5 / 2);
                    ctxPoint.beginPath();
                    var grd = ctxPoint.createLinearGradient(x, y, x, y + 5);

                    var depX = (Math.abs(mouseX - pos[0]));
                    var depY = (Math.abs(mouseY - pos[1]));
                    if (eventX == pos[0] && eventY == pos[1]) {
                        grd.addColorStop(0, "#3bc705");
                        grd.addColorStop(1, "#6ce73c");
                        hover = pos;
                    } else {
                        grd.addColorStop(0, "#fefefe");
                        grd.addColorStop(1, "#e6e6e6");
                    }
                    ctxPoint.fillStyle = grd;
                    ctxPoint.moveTo(x, y);
                    ctxPoint.arc(x, y, 5, 0, Math.PI * 2)
                    ctxPoint.fill();
                }

                if (hover) {
                    showInfo(hover[0], hover[1]);
                } else {
                    hideInfo();
                }
            };

            function adjustRatio(ctx) {
                var backingStore = ctx.backingStorePixelRatio ||
                    ctx.webkitBackingStorePixelRatio ||
                    ctx.mozBackingStorePixelRatio ||
                    ctx.msBackingStorePixelRatio ||
                    ctx.oBackingStorePixelRatio ||
                    ctx.backingStorePixelRatio || 1;
                pixelRatio = (window.devicePixelRatio || 1) / backingStore;
                ctx.canvas.width = canvasWidth * pixelRatio;
                ctx.canvas.height = canvasHeight * pixelRatio;
                ctx.canvas.style.width = canvasWidth + "px";
                ctx.canvas.style.height = canvasHeight + "px";
                ctx.scale(pixelRatio, pixelRatio);
            };

            app.prototype.add = function(pos, option) {
                var index = pos[0] + '_' + pos[1];
                eventPoints[index] = eventPoints[index] || [];
                eventPoints[index].push(option);
                drawEventPoint();
            };
            //
            root.globalEvent = app;
        })(window);

        var _map = new globalEvent('map');
        _map.add([109, 27], {
            title: '深圳'
        })
        _map.add([109, 27], {
            title: '广州'
        })
        _map.add([105,28], {
            title: '南宁'
        })
        _map.add([104,26], {
            title: '桂林'
        })
        _map.add([100,25], {
            title: '昆明'
        })
        _map.add([100,25], {
            title: '大理'
        })
        _map.add([100,25], {
            title: '丽江'
        })
        _map.add([102,27], {
            title: '百色'
        })
        </script>
    </div>
</body>

</html>