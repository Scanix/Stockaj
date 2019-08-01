<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fa fa-bell"></i>
    </a>

    <div id="notif" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

    </div>
</li>

@push('scripts')
    <script type="text/javascript">
        $.getJSON( '{{ route('notifications') }}', function( data ) {
            let items = [];
            $.each( data, function( i, item ) {
                items.push( "<li id='" + item.data.tool_id + "'>" + item.data.tool_name + "</li>" );
                console.log(item);
            });

            $( "<ul/>", {
                "class": "notif-list",
                html: items.join( "" )
            }).appendTo( "#notif" );
        });
    </script>
@endpush