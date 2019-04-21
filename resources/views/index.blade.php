<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.min.js
    "></script>
</head>

<body>
    <h1>jQuery Ajax Tutorial</h1>

    <h2>Coffee Orders</h2>
    <ul id="orders"></ul>

    <template id="order-template">
        <li> 
            <p><strong>Name:</strong> @{{name}}<p> 
            <p><strong>drink:</strong> @{{drink}}<p> 
            <button data-id='@{{id}}' class='remove'>X</button> 
        </li>
    </template>

    <h4>Add a Coffee Order</h4>
    <p>name: <input type="text" id="name"></p>
    <p>drink: <input type="text" id="drink"></p>
    <button id="add-order">Add!</button>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
