@if (Auth::check())
    @switch(Auth::user()->usertype->description)
        @case('ADMINISTRADOR')
            <template v-if="menu==1">
                <bingo></bingo>
            </template>
            @break
        @case('RESPONSABLE')
            
            @break
        @default
            
    @endswitch
@endif