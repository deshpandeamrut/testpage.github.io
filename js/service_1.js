app.service('myService', function ($http) {
    
    var users = [];
//    var todos = [];
//    $http({
//        method: 'POST',
//        url: 'process.php',
//        data: {
//            'action': 'get'
//        },
//        headers: {
//            'Content-Type': 'application/x-www-form-urlencoded'
//        }
//    })
//            .success(function (data) {
//                data.forEach(function (entry) {
//                    console.log(entry);
//                    if (entry.checked == "false") {
//                        entry.checked = false;
//                    } else {
//                        entry.checked = true;
//                    }
//                    todos.push(entry);
//                });
//                return todos;
//            });
    this.addUser = function (user) {
        if (users.length == 0) {
            users.push(user);
        } else {
            users.forEach(function (u) {
                if (u.id == user.id) {
//               alert("present already");
                    return;
                } else {
//               alert("added");
                    users.push(user);
                }
            });
        }
        localStorage.setItem("userData", JSON.stringify(users));

    };
    this.getUsers = function () {
        users = JSON.parse(localStorage.getItem("userData"));
        return users;
    }
    this.popAlert = function (txt) {
        alert(txt);
    };
    var allPosts = [];
    this.addPosts = function (posts) {
        if (allPosts.length == 0) {
            posts.forEach(function (p) {
                allPosts.push(p);
            });
            return 1;
        }
        posts.forEach(function (p) {
            allPosts.forEach(function (p2) {
                if (p2.id == p.id) {
                    //already present
                } else {
                    allPosts.push(p);
                }
            });
        });
    };
    this.getPosts = function (posts) {
        return allPosts;
    };
    this.getPost = function (postId) {
        var post;
        allPosts.forEach(function (p) {
            if (p.id == postId) {
                post = p;
                return false;
            }
        });
        console.log(post);
        return post;
    }
    
    this.addTodo = function (todo, action) {
        if (action == "add") {
            console.log("added");
            todos.push(todo);
        } else if (action == "markdone") {
            todos.forEach(function (entry) {
                if (todo.id == entry.id) {
                    todo.checked = entry.checked;
                    console.log("marked/unmarked");
                }
            });
        }
    }
    this.getTodos = function () {
        return todos;
    }
    this.synchTodos = function (todos) {
        $http({
            method: 'POST',
            url: 'process.php',
            data: {
                'action': 'synchTodos',
                'todos': todos
            },
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
                .success(function (data) {

                });
    }

});