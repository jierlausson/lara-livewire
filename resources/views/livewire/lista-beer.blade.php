<div>
    {{ $item }} <br>
    <input type="text" wire:model="item">

    @if ($action == 'Cadastrar')
        <button wire:click="add">Adicionar</button>
    @else
        <button wire:click="update">Atualizar</button>
    @endif

<p><button wire:click="resetList">Apagar Lista</button></p>


    <ul>
        @foreach ($list as $key => $nome)
            <li>
                <span>{{ $nome }} - </span>
                <button wire:click="edit({{ $key }})">Editar</button>
                <button wire:click="delete({{ $key }})">X</button>
            </li>
        @endforeach
    </ul>
</div>
