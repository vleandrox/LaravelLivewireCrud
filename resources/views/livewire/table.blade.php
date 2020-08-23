<h2>Listado de Posts</h2>
<table class="table">
    <head>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </head>
    <tbody>
        @foreach($post as $posts)   
        <tr>
            <td>{{$posts->id}}</td>
            <td>{{$posts->title}}</td>
            <td>{{$posts->body}}</td>
            <td>
                <button wire:click="edit({{$posts->id}})" class="btn btn-primary">Editar</button>
            </td>
            <td>
                <button wire:click="destroy({{$posts->id}})"  class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$post->links()}}