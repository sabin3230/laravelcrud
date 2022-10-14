<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Bank details</h1>

    <table border="1px">
        <tr>
            <td>User_id</td>
            <td>Name</td>
            <td>Address</td>
            <td>Phone Number</td>
            <td>Branch Name</td>
            <td>Account Number</td>
            <td>Date</td>
            <td>Amount</td>
            <td>Method</td>
        </tr>

        @foreach ($data as $dt)
            <tr>
                <td>{{$dt['buser_id']}}</td>
                <td>{{$dt['name']}}</td>
                <td>{{$dt['address']}}</td>
                <td>{{$dt['phone_no']}}</td>
                <td>{{$dt->bank['branch_name']}}</td>
                <td>{{$dt->bank['account_no']}}</td>
                <td>{{$dt->deposite['date']}}</td>
                <td>{{$dt->deposite['amount']}}</td>
                <td>{{$dt->deposite['method']}}</td>

            </tr>
        @endforeach
    </table>


</body>
</html>