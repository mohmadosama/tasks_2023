<!DOCTYPE html>
<htm>
    <head>
        <title>tasks</title>
    </head>
    <body>
        <h1>tasks:</h1>
        @foreach ($tasks as $item)
            <h3>
                <ul>
                    <li>
                        {{$item->name}}
                    </li>
                </ul>

            </h3>
        @endforeach
    </body>
</htm>
