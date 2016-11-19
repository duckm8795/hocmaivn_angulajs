<!DOCTYPE html>
<html ng-app="myApp">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>

<body class="red lighten-5" ng-controller="ThiTracNghiemController" >
<header>
    <!-- Nav bar -->
    <nav>
        <div class="nav-wrapper indigo ">
            <a href="#" data-activates="slide-out" class="button-collapse-1 left"><i class="material-icons">view_day</i></a>
            <a href="#" class="brand-logo center"><img class="responsive-img" src="images/ic_launcher.png"></a>
            <a href="#" data-activates="mobile-demo" class="right button-collapse"><i
                    class="material-icons">clear_all</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">Đăng ký</a></li>
                <li><a href="">Đăng nhập</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="">Đăng ký</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a href="">Đăng nhập</a></li>
            </ul>
        </div>
    </nav>
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
                <div class="background">
                    <img src="images/background.jpg">
                </div>
                <a href="#!user"><img class="circle" src="images/ic_launcher.png"></a>
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
        </li>
        <li><a href="#!">Toán</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="#!">Văn</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="#!">Anh</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="#!">Lý</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="#!">Hóa</a></li>

    </ul>
</header>


<main>
    <!-- Search -->
    <div class="container">
        <div class="row">
            <div class="input-field col s4 ">
                <select >
                    <option value="" disabled selected>Tìm kiếm</option>
                    <option value="1">Toán</option>
                    <option value="2">Văn</option>
                    <option value="3">Anh</option>
                    <option value="4">Lý</option>
                    <option value="5">Hóa</option>
                </select>
            </div>
            <div class="input-field col s2">
                <a href="#start1" class="waves-effect waves-light btn indigo">Tìm kiếm</a>
            </div>
            <div class="input-field col s2">
                <a href="#start2" class="waves-effect waves-light btn indigo">Tìm kiếm</a>
            </div>
            <div class="input-field col s2">
                <a href="#start3" class="waves-effect waves-light btn indigo">Tìm kiếm</a>
            </div>
            <div class="input-field col s2">
                <a href="#/" class="waves-effect waves-light btn indigo">Tìm kiếm</a>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col s12 card-panel">
                <div class="row">
                    <div class="col s9">
                        <form action="#" class="indigo-text" ng-repeat="ch in cauhois">
                            <p >
                                {{ ch.id }}. {{ ch.questions }}
                            </p>
                            <p ng-repeat =" chs in ch.choices">
                                <input name="group1" type="radio" id="test1" class="with-gap"/>
                                <label for="test1"">{{ chs.text }}</label>
                            </p>
                            
                        </form>                    
                    </div>                
                </div>
            </div>
        </div>
    

    </div>
    <div class="ng-view" >

    </div>
</main>


<footer class="page-footer indigo">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Giới thiệu</h5>
                <p class="grey-text text-lighten-4">HỆ THỐNG GIÁO DỤC HÀNG ĐẦU VIỆT NAM.
                    Với hơn 2,5 triệu thành viên tham gia học tập

                    Gần 100 thày cô giáo giỏi, uy tín trên toàn quốc
                    Hơn 400 thủ khoa, á khoa các cấp
                    Cùng hàng trăm nghìn học sinh tiến bộ vượt trội
                    là thành viên của HOCMAI..</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Mobile App</h5>
                <ul>
                    <li><a class="white-text" href="#!">Android</a></li>
                    <li><a class="white-text" href="#!">iOS </a></li>

                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Liên lạc</h5>
                <ul>
                    <li><a class="white-text" href="#!">Facebook </a></li>
                    <li><a class="white-text" href="#!">Google </a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="">Kiều Minh Đức</a>
        </div>
    </div>
</footer>

<script>
    var app = angular.module("myApp", ["ngRoute"]);
    app.config(function($routeProvider) {
        $routeProvider
                .when("/", {
                    templateUrl : "main_content.html"
                })
                .when("/start1", {
                    templateUrl : "start_exam.html"
                })
                .when("/start2", {
                    templateUrl : "content_question.html"
                })
                .when("/start3", {
                    templateUrl : "submitted.html"
                });
    });

    app.controller('ThiTracNghiemController', function ($scope,$http){
        $http.get('http://lar.dev/lar/list').success(function(response){
            console.log(response);
            $scope.cauhois = response;
        });
    });
</script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo asset('js/jquery-2.1.1.min.js'); ?>  "></script>
<script type="text/javascript" src="<?php echo asset('js/materialize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/init.js'); ?>"></script>

</body>
</html>