<div>
    {{ $item }} <br>
    <input type="text" wire:model="item">

    @if ($action == 'Cadastrar')
        <button wire:click="add" class="btn btn-outline-primary btn-sm">Adicionar</button>
    @else
        <button wire:click="update" class="btn btn-outline-primary btn-sm">Atualizar</button>
    @endif

    <button wire:click="resetList" class="btn btn-outline-warning btn-sm">Apagar Lista</button>

    <p>
        <ul>
            @foreach ($list as $key => $nome)
                <li>
                    <span>{{ $nome }}</span>
                    <button wire:click="edit({{ $key }})" class="btn btn-outline-primary btn-sm mb-2">Editar</button>
                    <button wire:click="delete({{ $key }})" class="btn btn-outline-danger btn-sm mb-2">X</button>
                </li>
            @endforeach
        </ul>
    </p>
</div>
