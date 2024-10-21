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
            text-transform: capitalize;
        }
        .entire_page{
            display:flex;
        }
        .entire_page .page1{
            border:1px solid black;
            height:100vh;
            width:30%;
        }
        .entire_page .page1 a{
            text-decoration:none;
            margin:auto;
        }
        .entire_page .page2{
            border:1px dashed black;
            height:100vh;
            width:70%;
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
           padding:20px;
           spacing:20px;
           width:40%;
        }
        .content{
            /* border:2px dashed black; */
            line-height:2rem;
        }
        .content .subhead{
            padding:20px;
            font-weight:bold;
            font-size:34px;
            font-family: 'Trebuchet MS', sans-serif;
            margin-left:50%;
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
            margin-left:50%;
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
            margin-left:50%;
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
            width:40rem;
            margin-top:10px;
            margin-left:50%;
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

    </style>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="h1">ToDoList App</div>
        </div>
    </div>
    @yield('main-section')
</body>
</html>
