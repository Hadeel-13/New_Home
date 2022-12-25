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
        
        @media screen and (max-width: 700px) {
            .table {
                margin-top: 10%;
            }
        }
    </style>
</head>

<body>
    <div include-html="list.html" id="show"></div>
    <h2 class="h2-card">المستخدمين</h2>
    <div class="table-responsive">
        <table class="table table-hover center " style="border-radius: 10%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الصورة</th>
                    <th class="">الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>رقم الهاتف</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr onmouseover="style.color='#690f79'" onmouseout="style.color='black'">
                    <td>1</td>
                    <td><img class="img-circle " src="logo1.jpg"></td>
                    <td>محمد</td>
                    <td>mohammad@gmail.com</td>
                    <td>0934261788</td>
                    <td>
                        <div class="tool">حذف</div>
                        <span class="span"><i class="fas fa-heart icon"  data-bs-toggle="tooltip" title="Hooray!"></i></span>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><img class="img-circle " src="logo1.jpg"></td>
                    <td>محمد</td>
                    <td>mohammad@gmail.com</td>
                    <td>0934261788</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show').load('list.html');
        });
    </script> -->

</body>

</html>