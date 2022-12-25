@extends('dashboard.home')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link href="bootstrap-5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@300&display=swap');

        * {
            font-family: 'Amiri', serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            /*-------Colors----------*/
            --body-color: #f2f2f2;
            --primary-color: #82498c;
            --primary-color-light: #e7e6eb;
            --text-color: #707070;
            /*-------Transition-------*/
            --tran-02: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.4s ease;
            --tran-05: all 0.5s ease;
        }

        body {
            background: var(--body-color);
        }

        .h2-card {
            text-align: center;
            margin: auto;
            margin-top: 5%;
        }

        .table {
            min-width: 400px;
            overflow: hidden;
            width: 95%;
            direction: rtl;
            text-align: center;
            box-shadow: 0 0 20px rgba(75, 44, 82, 0.5);
            background-image: linear-gradient(#dfc6e4, #690f79, #690f79);
            margin-top: 3%;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

        .table tbody tr {
            border-bottom: 1px solid #dfc6e4;
        }

        .table tbody tr:nth-of-type(odd) {
            background-color: #f3f3f3;
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #f0d3f3;
        }

        i {
            font-size: 25px;
        }

        .img-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .span {
            background-color: #fff;
            border-radius: 50%;
            display: block;
            height: 35px;
            width: 35px;
            text-align: center;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
        }

        .span i {
            font-size: 25px;
            line-height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }

        td .tool {
            position: absolute;
            top: -70px;
            background-color: #fff;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
            font-size: 20px;
            padding: 2px;
            border-radius: 25px;
        }

        .form-select {
            background-position: left .75rem center;
            width: 200px;
            margin: auto;
        }

        button {
            margin-top: 5px;
            width: 150px;
            cursor: pointer;
            background: #ffd8fd;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 5px 25px #c16dd6, 0px -5px 10px #f8a6ff, inset 0px -5px 10px #c16dd6, inset 0px 5px 10px #f8a6ff;
            color: rgb(66, 66, 66);
            font-size: 20px;
            transition: 500ms;
        }

        button:hover {
            animation: hueRotation 2s linear infinite;
        }

        @keyframes hueRotation {
            to {
                filter: hue-rotate(-500deg);
            }
        }

        @media screen and (max-width: 700px) {
            .table {
                margin-top: 10%;
            }
        }
    </style>
</head>

<body>
    <div include-html="list.html" id="show"></div>
    <h1 class="h2-card">المستخدمين <i class="fas fa-users"></i></h1>
    
<div class="row">
  <div class="col">
  </div>
  <div class="col">

  <input type="text"class="form-control" placeholder="بحث.."
    aria-label="Search" id="myInput">
</div>
 
</div>
        <table class="table table-hover center " style="border-radius: 10%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الصورة</th>
                    <th class="">الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>رقم الهاتف</th>
                    <th>الدور</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($users as $user)
                <tr onmouseover="style.color='#690f79'" onmouseout="style.color='black'">
                    <td>{{$loop->index+1}}</td>
                    <td><img class="img-circle " src="images/user.jpg"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <select class="form-select" name="" value="">
                            <option selected disabled value=""></option>
                            <option value="1">مستخدم عادي</option>
                            <option value="4">مستخدم ممنوع من المشاركة</option>
                        </select>
                    </td>
                    <!-- <td>
                        <button>تحويل لموظف</button>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links("pagination::bootstrap-4") }}
    </div>
    <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show').load('list.html');
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>
@endsection