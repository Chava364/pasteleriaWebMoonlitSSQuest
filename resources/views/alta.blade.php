<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url('imagenes/wallhaven-6q3g3q_1600x1000.png'); /* Reemplaza esto con la URL de tu imagen en el servidor web */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            width: 80%;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .btn-group {
            text-align: center;
        }

        .btn-group button {
            margin-right: 5px;
        }
        .navbar-container {
            margin-bottom: 20px;
        }

        .nav {
            background-color: rgba(255, 192, 203, 0.0); /* Cambiado a transparente */
            border: none; /* Quitado el borde */
        }

        .nav-link {
            margin: 0 15px; /* Espacio entre los enlaces */
            color: black; /* Cambiado el color del texto */
        }
    </style>
</head>

<body>
<div class="navbar-container">
        <nav class="nav">
            <div class="container mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="pedidos">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="alta">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="ventas">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black font-weight-bold" href="solicitudes">Solicitudes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <h2>Administración de Productos</h2>

        <form action="{{ route('altas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="imagen">Imagen del Producto:</label>
            <input type="file" id="imagen" name="imagen" required accept="image/*">

            <button type="submit">Agregar Producto</button>
        </form>

        <h2>Lista de Productos</h2>
        <table>
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td><img src="{{ asset('imagenes/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="50"></td>
            <!-- Agrega una clase editable a los campos que se podrán editar -->
            <td class="editable" data-column="nombre" data-id="{{ $producto->id }}">{{ $producto->nombre }}</td>
            <td class="editable" data-column="precio" data-id="{{ $producto->id }}">{{ $producto->precio }}</td>
            <td class="editable" data-column="descripcion" data-id="{{ $producto->id }}">{{ $producto->descripcion }}</td>

            <td>
                <!-- Botones para editar y eliminar -->
                <!--<a href="{{ route('altas.edit', $producto->id) }}">Editar</a>-->
                <form action="{{ route('altas.destroy', $producto->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="delete-btn">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

<script>
    // Agregar un evento click
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const confirmDelete = confirm('¿Estás seguro de que quieres eliminar este producto?');
            if (confirmDelete) {
                // Si se confirma la eliminación
                this.closest('form').submit();
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editableFields = document.querySelectorAll('.editable');

        editableFields.forEach(field => {
            field.addEventListener('click', function() {
                const id = this.dataset.id;
                const column = this.dataset.column;
                const value = prompt(`Editar ${column}:`, this.innerText);

                if (value !== null) {
                    updateProduct(id, column, value);
                }
            });
        });

        function updateProduct(id, column, value) {
            // AJAX
            fetch(`/productos/${id}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    column: column,
                    value: value
                })
            })
            .then(response => {
                if (response.ok) {
                    // Actualiza el valor en tabla
                    document.querySelector(`td[data-id="${id}"][data-column="${column}"]`).innerText = value;
                } else {
                    console.error('Error al actualizar el producto');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
</script>


</body>

</html>

