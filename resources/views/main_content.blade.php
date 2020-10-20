@if (Auth::check())
    @switch(Auth::user()->usertype->description)
        @case('ADMINISTRADOR')
            <template v-if="menu==1">
                <bingo></bingo>
            </template>
            <template v-if="menu==2">
                <prueba></prueba>
            </template>
            @break
        @case('RESPONSABLE')
            
            @break
        @default
            
    @endswitch
@endif