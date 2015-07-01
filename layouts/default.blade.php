<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }} 
    </head>
    <body class="homepage1">
        <div class="wrapper">
            {{ Theme::partial('header') }} 
            {{-- Theme::partial('slider') --}}
            {{ Theme::place('content') }}
            {{ Theme::partial('footer') }}
        </div>
            {{ Theme::partial('defaultjs') }}
            {{ Theme::asset()->scripts() }}
            {{ Theme::asset()->container('footer')->scripts() }}
    </body>
</html>