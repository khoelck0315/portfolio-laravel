<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Message</title>
    <style>
    h4 {
	    background: #f8f9fa;    
    }
    h2 {
	    background: #cff4fc;
	    border-left:10px solid #cff4fc;
	    border-top: 20px solid #cff4fc;
	    border-bottom: 20px solid #cff4fc;
	    color: black;
    }
    td {
    	padding-right: 2em;
    }
    </style>
</head>
<body>
    <h2>New message from portfolio contact page</h2>             
    <h4>Details:</h4>
    <table>
        <tr>
            <td>Request Type:</td>
            <td>{{ $type }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Company:</td>
            <td>{{ $company }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $phone }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>Resume requested:</td>
            <td>{{ $resume }}</td>
        </tr>
        <tr>
            <td>Message:</td>
            <td>{{ $body }}</td>
        </tr>
    </table>
</body>
</html>
