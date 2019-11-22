<li class="list-group-item">
    <b class="title-list-show"><i class="fas fa-book"></i> Preço</b>
    <br>
    {{ $project->price }}
</li>
<li class="list-group-item">
    <b class="title-list-show"><i class="fas fa-book"></i> Cliente</b>
    <br>
    {{ $project->client }}
</li>
<li class="list-group-item">
    <b class="title-list-show"><i class="fas fa-book"></i> Categoria de projeto</b>
    <br>
    {{ $project->category['name'] }}
</li>
<li class="list-group-item">
    <b class="title-list-show"><i class="fas fa-users"></i> Membros</b>
    <br>
    @foreach ($project->user as $user)
        {{ $user->name }}
        <br>
    @endforeach
</li>
<li class="list-group-item">
    <b class="title-list-show"><i class="fas fa-users"></i> Descrição do Projeto</b>
    <br>
    {{ $project->description }}
</li>