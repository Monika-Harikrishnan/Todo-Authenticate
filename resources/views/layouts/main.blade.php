<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('head')
    <style>
        *{
            padding:0;
            margin:0;
        }
        .entire_page{
            display:flex;
            height: 100vh;
        }
        .entire_page .page1{
            border-right:1px solid #797979;
            width:20%;
            height: 100vh;
            padding:10px;
            line-height:2rem;
        }
        .entire_page .page1 .title{
            text-align:center;
            font-size:17px;
            padding:10px;
            font-weight:500;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom:10px;
            border-radius:10px;
        }
        .title a.active{
            background-color:orange;
            padding:15px;
            padding-left:40px;
            padding-right:40px;
            border-radius:10px;
        }
        .entire_page .page1 a{
            text-decoration:none;
            color:black;
        }
        .entire_page .page1 a:hover{
            text-decoration:underline;
        }
        .entire_page .page2{
            /* border:1px dashed black; */
            flex-grow: 1;
            height: auto;
            overflow-y: auto;
            margin-bottom:5rem;
        }
        .container{
            /* border-bottom:2px solid black; */
            padding:20px;
            display:flex;
            gap:70px;
        }
        .container .h1{
            font-size:30px;
            font-family: 'Brush Script MT', cursive;
            color:purple;
            font-weight:bold;
            margin-left:50px;
        }
        .my-5{
           /* border:2px solid black; */
           spacing:20px;
           width:40%;
        }
        .content{
            /* border:2px dashed black; */
            line-height:2rem;
        }
        .paragraph_content{
            /* border:2px dashed black; */
            line-height:2rem;
            width:50rem;
            word-spacing: 5px;
        }
        .content .subhead{
            padding-bottom:20px;
            font-weight:bold;
            font-size:34px;
            font-family: 'Trebuchet MS', sans-serif;
        }
        .content .input{
            border:1px solid black;
            margin:20px;
            border-radius:10px;
            font-size:15px;
            font-weight:bold;
            padding:17px;
        }
        .content .input .input-box{
            width:80%;
            border:none;
            outline:none;
        }
        .content .input-create{
            border:1px solid black;
            /* margin:20px; */
            border-radius:10px;
            font-size:15px;
            font-weight:bold;
            padding:70px;
            width:40rem;
        }
        .content .form-label{
            padding:0px;
        }
        .content .form-control{
            padding:20px;
            width:100%;
            margin-bottom:20px;
           width:30rem;
        }
        .content .btn{
            width:100%;
            padding:10px;
            background-color:purple;
            color:white;
            border:none;
            border-radius:10px;
        }
        .content p{
            text-align:center;
        }
        .add{
            display:flex;
            gap:20px;
            padding:10px;
            width:40rem;
        }
        .add .add-input{
            width:130%;
            border:2px solid black;
        }
        .add .btn{
            width:40%;
            height:5%;
            text-align:center;
            text-decoration:none;
            margin-top:20px;
        }
        .btn-edit{
            padding:10px;
            text-decoration:none;
            border:none;
            background-color:green;
            color:white;
            margin:10px;
        }
        .btn-delete{
            padding:10px;
            text-decoration:none;
            border:none;
            background-color:rgb(157, 13, 13);
            color:white;
        }
        .table{
            padding:10px;
            line-height:3rem;
            width:57rem;
            margin-top:10px;
        }
        .table-border{
            width:100%;
            border:1px solid black;
            border-collapse: collapse;
        }
        .table-border th{
            text-align:center;
            border:1px solid black;
            padding:10px;
            font-size:18px;
        }
        .table-border td{
            text-align:center;
            border:1px solid black;
            padding:10px;
        }
        .span{
            color:red;
        }
        .alert{
            color:red;
        }

        /* Dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown button */
        .dropbtn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            background:none;
            font-weight:500;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        /* Dropdown links */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown content on hover */
        .dropdown:hover .dropdown-content {
            display: block; /* Show the dropdown when hovering over the dropdown */
        }

        /* Change button color on hover */
        .dropdown:hover .dropbtn {
            background-color: orange; /* Darker green on hover */
        }
    </style>
</head>
<body style="overflow:hidden">
    <div class="background" >
        <div class="container">
            <div class="h1">ToDoList App</div>
            <a href="{{route('logout')}}" style="margin-left:300px;margin-top:10px;background-color:purple;padding:10px;color:white;text-decoration:none;padding-left:40px;padding-right:40px;margin-left:60%;border-radius:20px"onclick="event.preventDefault(); confirmLogout();">Logout</a>

        </div>
    </div>
    <div class="entire_page">
        <div class="page1">
            <div class="title"><a href="{{route("homepage")}}" class="{{ request()->is('homepage') ? 'active' : '' }}">Dashboard</a></div>
            <div class="title"><a href="{{route("dashboardmember")}}" class="{{ request()->is('dashboardmember') ? 'active' : '' }}">Team Members</a></div>
            <div class="title"><a href="{{route("dashboard")}}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Tasks</a></div>
            <div class="title">
                <div class="dropdown">
                    <button class="dropbtn">Settings</button>
                    <div class="dropdown-content">
                        <a href="{{ route("profileedit") }}" class="{{ request()->is('profileedit') ? 'active' : '' }}">Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page2">
            @yield('main-section')
        </div>
    </div>
</body>
</html>
<script>
    function confirmLogout() {
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "{{ route('logout') }}";
        }
    }
</script>
