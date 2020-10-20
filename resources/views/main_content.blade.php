@if (Auth::check())
    @switch(Auth::user()->usertype->description)
        @case('MANAGER')
            <template v-if="menu==1">
                <bingo></bingo>
            </template>
            @break
        @case('RESPONSIBLE')
            
            @break
        @default
            
    @endswitch
@endif