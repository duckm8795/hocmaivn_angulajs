/**
 * Created by kieum on 11/20/2016.
 */
var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "resources/views/view/main_content.html"
        })
        .when("/start1", {
            templateUrl: "resources/views/view/start_exam.html"
        })
        .when("/start2", {
            templateUrl: "resources/views/view/content_question.html"
        })
        .when("/start3", {
            templateUrl: "resources/views/view/submitted.html"
        })
        .when("/getlist/:id", {
            templateUrl: "resources/views/view/info_monhoc.html"
        })
        .when("/start/:id", {
            templateUrl: "resources/views/view/submitted.html"
        });

});
app.controller('ThiTracNghiemController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/list11/1/1').success(function (response) {
        //console.log(response);
        $scope.cauhois = response;
    });
});
app.controller('MonThiController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/list_monhoc').success(function (response) {
        console.log(response);
        $scope.monhocs = response;
    });
});
app.controller('GetNoCauHoiController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/getnoquestion').success(function (response) {
        //console.log(response);
        $scope.no_cauhoi = response;
    });
});
app.controller('getListEachMonThiController', function ($scope, $http, $routeParams) {
    $scope.id = $routeParams.id;

    $http.get('http://localhost/hocmaivn/getlist/' +  $scope.id  ).success(function (response) {
        console.log(response);
        $scope._monhoc = response;
    });
});
app.controller('getListMonThiController', function ($scope, $http) {


    $http.get('http://localhost/hocmaivn/getlist' ).success(function (response) {
        console.log(response);
        $scope.list_monhoc = response;
    });
});
app.controller('getStartedController', function ($scope, $http, $routeParams) {
    $scope.id = $routeParams.id;

    $http.get('http://localhost/hocmaivn/start/' +  $scope.id  ).success(function (response) {
        console.log(response);
        $scope._monhoc = response;
    });
});