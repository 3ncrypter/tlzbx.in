app.controller('teamCtrl', function($scope, $http) {
  $http.get("dir/data.json")
  .success(function (data) {$scope.items = data;});
});