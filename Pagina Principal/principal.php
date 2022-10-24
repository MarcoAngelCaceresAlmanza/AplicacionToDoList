<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina principal</title>
    
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	
</head>
<body>
	
	<div class="col-md-0"></div>
	<div >
		<font color="black"><h2 class="text-primary">Listado de tareas de Marco</h2></font>
		
		
		<br /><br /><br />
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>tarea</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
			<?php
					require 'conexion.php';
					$query = $conexion->query("SELECT * FROM `tareas` ORDER BY `id` ASC");
					$count = 1;
					while($fetch = $query->fetch_array()){
					
				?>
                <tr th:each="tarea: ${tareas}">
                    <td th:text="${tarea.id}"></td>
                    <td th:text="${tarea.tareas}"></td>
                    <td><a class="btn btn-primary btn-xs" th:href="@{/tareas/{id}/editar(id=${tarea.id})}"/>editar</a>
                        <a class="btn btn-danger btn-xs" href="eliminar.php" onmouseover="" style="cursor: pointer;"
                           th:onclick="'del(\'/tareas/' + ${tarea.id} + '\')'">borrar</a>
						   
                    </td>
                </tr>
				<?php
					}
				?>
                </tbody>
		</table>
		<p><a class="btn btn-primary" th:href="@{/usuarios/{id}/tareas/nueva(id=${usuario.id})}"> Nueva tarea</a>
            <a class="btn btn-link" href="/logout">Salir</a></p>
	</div>
	<div class="row mt-2">
        <div class="col">
            <div class="alert alert-success alert-dismissible fade show" role="alert" th:if="${!#strings.isEmpty(mensaje)}">
                <span th:text="${mensaje}"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


</div>
<div class="col-md-0"></div>
	<div class="col-md-8 well">
		<font color="black"><h2 class="text-primary">Descripcion</h2></font>
</body>
</html>