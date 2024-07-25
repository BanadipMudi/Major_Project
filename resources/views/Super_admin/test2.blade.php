<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border:2px solid black;
            text-align:center;
            border-collapse:collapse;
        }
        td{
            width:150px;
        }
        button{
            display:block;
            background-color:blue;
            color:white;
            margin:15px;
            padding:10px;

        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>user id</th>
            <th>User Name</th>
            <th>Science</th>
            <th>Trending</th>
            <th>Sports</th>
            <th>Programming</th>
            <th>Education</th>
            <th>Technology</th>
            <th>Answers</th>
            </tr>
        </thead>
        <tbody>
            @foreach($arr as $dtt)
                <tr>
                    <td>{{$dtt['id']}}</td>
                    <td>{{$dtt['nm']}}</td>
                    <td>{{$dtt['num1']}}

                   <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num2']}}

                     <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num3']}}

                     <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num4']}}

                     <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num5']}}

                     <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num6']}}

                     <button> Make Admin </button>

                    </td>
                    <td>{{$dtt['num7']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>