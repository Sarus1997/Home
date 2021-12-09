<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<style>
    .bg1 {
        background-color: rgb(250, 89, 89);
    }

    .bg2 {
        background-color: rgb(77, 199, 77);
    }

    .bg3 {
        background-color: rgb(201, 201, 230);
        width: 200px;
        height: 1350px;
        float: left;
    }

    .bg4 {
        background-color: rgb(179, 232, 207);
        text-align: center;
        width: 80%

    }

    .col-12{
        color: rgb(29, 0, 135);
    }
</style>

<body>
    <div class="container table-bordered">
        <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.18169-9/18581774_1166153336827802_5365312406283285433_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=19026a&_nc_eui2=AeHT3jN3ApZiB0L_73Fg-OlclaQyxqHo8yGVpDLGoejzIQJe_7mm9vRPClQvzIFPPfNzNpTrqGfQc2QkjmiM0DGt&_nc_ohc=LDHQMwkfkLwAX-QflMB&_nc_ht=scontent.fbkk5-8.fna&oh=d257c9ca229b22dadc6282703c2aa333&oe=61D9157D"
            class="img-fluid" alt="..." width="100%" bordered="1">
        <div class="container">
            <center>
            <div class="col-12 bg3">
                <p><h1>C</h1</p>
                <p><h1>A</h1</p>
                <p><h1>T</h1</p>
                    <hr>
                    <p><h1>T  </h1</p>
                        <p><h1>H  </h1</p>
                            <p><h1>A  </h1</p>
                                <p><h1>I  </h1</p>
                                    <p><h1>L  </h1</p>
                                        <p><h1>A  </h1</p>
                                            <p><h1>N  </h1</p>
                                                <p><h1>D  </h1</p>
                                                    <hr>
            
            </div>
        </center>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 20rem;">
                    <img src="https://obs.line-scdn.net/0hP2zRU8f2Dx1HKyLMSThwSn19DHJ0RxweIx1eHhtFUSk5SE9KeUhFKGsuU39sEkhDKRpGfGQpFCxjTEtIK09F/w1200"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เป็นของเล่น DIY สำหรับแมว
                            ในรูปแบบกล่องกระดาษ
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card" style="width: 20rem;">
                    <img src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.6435-9/50632790_2643209609119467_7451733709843070976_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeEg7RX_3pHAeULiqHTPfutWT2xPUhf9UcFPbE9SF_1RwagCLy19EVqAGY0sA14wC-TnhfQWYKeSHBuBBo6-dD-J&_nc_ohc=0atDk-buHCcAX8ZYYxH&_nc_ht=scontent.fbkk5-1.fna&oh=7197c58edf5c804e5975ba487696891f&oe=61D5B42E"
                        class="card-img-top" alt="..." height="240">
                    <div class="card-body">
                        <p class="card-text">เป็นของเล่น DIY สำหรับแมว
                            ในรูปแบบกล่องกระดาษ
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <button id="btnBack"> <h6>กลับ</h6></button>

                <div id="main">
                    <table  class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>

                <div id="detail">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-12 bg4">
                <h4>63122980</h4>
                <h5>นายสหรัฐ สุวรรณภาพร</h5>
            </div>
        </div>
    </div>
</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

        // console.log(id);
        var url = "https://jsonplaceholder.typicode.com/posts/" + id

        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {

            })


    }

    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    // console.log(item);
                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {

            })
    }

    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>

</html>
