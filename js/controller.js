app.controller('defaultController', function ($scope, myService) {
    $scope.imgsrc = "angular.jpg";
    makeMenuItemActive('#default');
});
app.controller('item1Controller', function ($scope, $rootScope, myService) {
//    $scope.data = dataObject;
    $scope.users = myService.getUsers();
    makeMenuItemActive('#ngRepeat');
});
app.controller('item2Controller', function ($scope, $rootScope) {
//    alert("item2 controller");
    $scope.inputData = "hello";
    $rootScope.data = $scope.inputData;
    makeMenuItemActive('#2way');
});
app.controller('item3Controller', function ($scope, $rootScope, myService) {
//    alert("item2 controller");
    $scope.addUser = function () {
        var user = {
            'id': $scope.id,
            'name': $scope.name,
            'company': $scope.company,
        };
        console.log(user);
        var status = myService.addUser(user);

    }
    makeMenuItemActive('#addUser');

});
app.controller('item4Controller', function ($scope, $rootScope, myService) {
//    alert("item2 controller");
    $scope.users = myService.getUsers();
    console.log($scope.users);
    makeMenuItemActive('#showUser');
});
app.controller('feedController', function ($scope, myService, $http) {
    $scope.posts = myService.getPosts();
    if ($scope.posts.length == 0) {
        var url = "http://nammabagalkot.in/category/news/?json=1";
        $http.get(url).success(function (response) {
            $scope.posts = response.posts;
            myService.addPosts($scope.posts);
        });
    }
    $scope.customNavigate = function (id) {
        alert(id);
    }
    makeMenuItemActive('#feed');
});
app.controller('postController', function ($scope, $routeParams, myService) {
    $scope.postId = $routeParams.id;
    $scope.post = myService.getPost($scope.postId);
    console.log("op: " + $scope.post);
});
app.controller('todoController', function ($scope, myService, $http, $timeout, $rootScope, $interval) {
    makeMenuItemActive('#todo');
    $scope.todos = [{}];
    myService.getTodos().then(function (data) {
        if (data.length == 0) {
            console.log(data);
            $scope.todos = data;
            return;
        }
        data.forEach(function (entry) {
//                    console.log(entry);
            if (entry.checked == "false") {
                entry.checked = false;
            } else {
                entry.checked = true;
            }
            console.log(data);
            $scope.todos = data;
        });

    });
    $scope.addTodo = function () {
        var id = 0;
        $scope.todos.forEach(function (entry) {
            if (entry.id > id) {
                id = entry.id;
            }
        })
        id = id + 1;
        var time = new Date().toDateString();
        var todonew = {
            'id': id,
            'title': $scope.newtodotext,
            'checked': false,
            'time': time
        };
        $scope.todos.push(todonew)
        $scope.todos.sort(function (a, b) {
            if (b.id < a.id) {
                return -1;
            }
            else if (a.id < b.id) {
                return 1;
            }
            else {
                return equal;
            }
        })
        $scope.newtodotext = "";
        myService.addTodo(todonew).then(function (data) {
            console.log(data);
        });
    }
    $scope.markDone = function (todo) {
        myService.markTodo(todo).then(function (data) {

        });

    };
    $scope.removeTodo = function (todo) {
        myService.removeTodo(todo).then(function (data) {
            $scope.todos.splice($scope.todos.indexOf(todo), 1);
//      $scope.todos = $scope.todos.sort();
        });
    }
    $scope.editTodo = function (todo) {
        $scope.newtodotext = todo.title;
    }
});

makeMenuItemActive = function (currentMenuItem) {
    var menuItems = ['#ngRepeat', '#2way', '#addUser', '#showUser', '#feed', '#todo']
    menuItems.forEach(function (item) {
        if (currentMenuItem == item) {
            $(currentMenuItem).addClass("active");
        } else {
            $(item).removeClass('active');
        }
    });
}


app.filter('removeHtml', function () {
    return function (value) {
        var regex = /(<([^>]+)>)|&nbsp;| (\[&hellip;])|(#gallery.*\*\/)/ig;
        result = value.replace(regex, "");
        return result;
    };
});