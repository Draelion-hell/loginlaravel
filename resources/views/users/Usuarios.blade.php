<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($usuarios as $user)
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                
                <td>
                    <a href="/eliminar/usuario/{{$user->id}}"target="blank" rel= "noopener">
                    
                        ELIMINAR
                        </a>
                </td>

                <td>
                    <a href="/editar/usuario/{{$user->id}}"target="blank" rel= "noopener">
                    
                        EDITAR
                        </a>
                </td>
                        




            </tr>
        @endforeach 
    </table>
</body>
</html>