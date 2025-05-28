<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Blogs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            font-size: 28px;
        }

        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 1000px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-btn {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .edit-btn {
            background-color: #0275d8;
        }

        .edit-btn:hover {
            background-color: #025aa5;
        }

        .delete-btn {
            background-color: #d9534f;
        }

        .delete-btn:hover {
            background-color: #c9302c;
        }

        .create-container {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .create-button {
            padding: 14px 28px;
            background-color: #f0ad4e;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .create-button:hover {
            background-color: #ec971f;
        }
    </style>
</head>
<body>

    <h2>📚 Lista de Blogs</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Autor</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->content, 50) }}</td>
                    <td>{{ $blog->user->name }}</td>
                    <td>
                        <a href="/post/{{ $blog->id }}/edit" 
                           target="_blank" 
                           rel="noopener" 
                           class="action-btn edit-btn">
                            ✏️ Editar
                        </a>
                    </td>
                    <td>
                        <a href="/post/eliminar/{{ $blog->id }}" 
                           target="_blank" 
                           rel="noopener" 
                           class="action-btn delete-btn">
                            🗑️ Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="create-container">
        <a href="/post/create" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="create-button">
           ➕ Crear nuevo post
        </a>
    </div>

</body>
</html>
