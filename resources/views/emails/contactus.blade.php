<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <div class="mail">
        <div class="container">
            <div class="title">
                <h1>لقد تم ارسال رساله لك من موقعك</h1>
            </div>
           <div class="main">
               <h2>Name: {{$data["name"]}} </h2>
               <p>Email: {{$data["email"]}}</p>
               <p>phone: {{$data["phone"]}}</p>
               <p>addres: {{$data["addres"]}}</p>
               <span>
                  {{$data['msg']}}
               </span>
           </div>
        </div>
    </div>
</body>
</html>

