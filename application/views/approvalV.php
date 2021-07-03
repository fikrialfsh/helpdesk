<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Website HelpDesk</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

    .wrapper {
    display: flex;
    align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        min-height: 100vh;
    }

    #sidebar.active {
        margin-left: -250px;
    }
    a[data-toggle="collapse"] {
    position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }
        #sidebar.active {
            margin-left: 0;
        }
    }
    body {
        font-family: 'Segoe UI';
        background: #fafafa;
    }
    h2{
        font-family: 'Segoe UI';
        font-size: 30px;
        font-weight: 400;
        line-height: 1.7em;
        color: #999;
    }
    .button3 {
            font-family : 'Segoe UI';
            font-size : 12px;
            font-style: normal;
            font-variant : normal;
            font-weight : 500px;
            line-height : 26.4px;
            background-color: #F17425;
            border: none;
            color: #ffffff;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 0px 0px 20px 0px;
            border-radius: 12px;
        }
    p {
        font-family: 'Segoe UI';
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    #sidebar {
        /* don't forget to add all the previously mentioned styles here too */
        background: #313131;
        color: #fff;
        transition: all 0.3s;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #515151;
    }

    #sidebar .sidebar-footer {
        bottom: 0;
        width : 18.5%;
        position: fixed;
        background: #F17425;
    }
    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #313131;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    
    #sidebar ul li b {
        padding: 10px;
        font-size: 1.1em;
        display : block;
        background: #F17425;
    }

    #sidebar ul li b:hover {
        color: #ffffff;
        background: #F17425;
    }

    #sidebar ul li a:hover {
        color: #ffffff;
        background: #F17425;
    }

    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #313131;
    }
    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #313131;
    }
    .files input {
        padding: 120px 0px 85px 35%;
        text-align: center !important;
        margin: 0;
        width: 100% !important;
    }
    .file input-button{
        color : black;
    }
    .files{ position:relative}
    .files:after {  pointer-events: none;
        position: absolute;
        top: 60px;
        left: 0;
        width: 50px;
        right: 0;
        height: 56px;
        content: "";
        background-image: url(assets/img/paper-clip.png);
        display: block;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
    }
    .color input{ background-color:#f1f1f1;}
    .files:before {
        position: absolute;
        bottom: 10px;
        left: 0;  pointer-events: none;
        width: 100%;
        right: 0;
        height: 57px;
        content: " drag & drop files. ";
        display: block;
        margin: 0 auto;
        color: #313131;
        font-weight: 600;
        text-transform: capitalize;
        text-align: center;
    }
    .form-row{
        margin : 0px;
    }
    .form-row-baru{
        margin : 0px;
        text-align : center;
    }
    .form-control{
        margin-right :100px;
    }
    .form-row-asli{
        margin : 0px;
        width : 100%;
        margin-right : 700px;
    }
    .card{
        background-color: white;
    }
    #content-wrapper {
        text-align : center;
        margin: 20px 20px 20px 20px;
    }
    .card-baru{
        text-align : center;
        margin : 0px 50px 50px 50px;
        padding : 35px 20px 35px 20px;
        box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
        border-radius : 5px;
    }
    h3 {
        margin-left : 50px;
        text-align: justify;
        font-family: 'Segoe UI';
        color: black;
        font-size: 18px;
    }
    .form{
        text-align : justify;
    }
    .col-md-jarak {
        width : 20%;
    }

    </style>
</head>


<body>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <div class="wrapper">
        <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <center><img src="assets/img/logohelp3.png" width="130" height="50"></center>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#">Request</a>
                    </li>
                    <li>
                        <a href="#">View Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Check Approval</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master Data</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Data Pegawai</a>
                            </li>
                            <li>
                                <a href="#">Data Request</a>
                            </li>
                            <li>
                                <a href="#">Data Agent</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <ul class="list-unstyled tes">
                        <li>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <a href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
                    <div id="content-wrapper">
                        <form>
                            <h3>Sort By</h3>
                            <div class="card-baru">
                                <div class="form-row"> 
                                    <div class="form">
                                        <div class="form-row">
                                            <div class="form-group col-md-jarak">
                                                <label for="name">Name</label>
                                                <input type="name" class="form-control" id="name" placeholder="Insert Text Here...">
                                            </div>
                                            <div class="form-group col-md-jarak">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control" id="date" placeholder="Insert Text Here...">
                                            </div>
                                            <div class="form-group col-md-jarak">
                                                <label for="tickets">Number of Ticket(s)</label>
                                                <input type="tickets" class="form-control" id="tickets" placeholder="Insert Text Here...">
                                            </div>
                                            <div class="form-group col-md-jarak">
                                                <label for="reqtype">Request Type</label>
                                                <select id="reqtype" class="form-control">
                                                    <option></option>
                                                    <option>Incident</option>
                                                    <option>Problem</option>
                                                    <option>Service</option>   
                                                </select>
                                            </div>
                                            <div class="form-group col-md-jarak">
                                                <label for="agents">Agents</label>
                                                <select id="agents" class="form-control">
                                                    <option></option>
                                                    <option>Support Business Units</option>
                                                    <option>Technical Support</option>
                                                    <option>Application Support</option>
                                                    <option>Independent Support</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Approval Screen</h3>
                            <div class="card-baru">
                                <div class="form-row"> 
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Number of Ticket(s)</th>
                                        <th scope="col">Submission Date</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Agent</th>
                                        <th scope="col">Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Steven Alexander</td>
                                        <td>4</td>
                                        <td>21-05-2021</td>
                                        <td>Incident</td>
                                        <td>Support Business Units</td>
                                        <td><button type="submit" class="form-signin button3">Details</button></td>
                                        </tr>
                                        <tr>
                                        <td>Michael Steven</td>
                                        <td>3</td>
                                        <td>21-05-2021</td>
                                        <td>Problem</td>
                                        <td>Technical Support</td>
                                        <td><button type="submit" class="form-signin button3">Details</button></td>
                                        </tr>
                                        <tr>
                                        <td>Michelle Jasmine</td>
                                        <td>5</td>
                                        <td>21-05-2021</td>
                                        <td>Service</td>
                                        <td>Application Support</td>
                                        <td><button type="submit" class="form-signin button3">Details</button></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>
</body>

</html>