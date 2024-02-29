<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table id="datatable" class="table table-striped table-bordered" >
            <thead>
                <tr>
                <th>Full Name : </th>
                <th>Email : </th>
                <th>content : </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$content['full_Name']}}</td>
                <td>{{$content['email']}}</td>
                <td>{{$content['content']}}</td>
                </tr>
            </tbody>
            </table>
    </body>
</html>
