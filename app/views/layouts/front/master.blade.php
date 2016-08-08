<!DOCTYPE html>
<html>
    @include('layouts.front.head')
	<body>
		@include('layouts.front.navbar')
        
        @yield('body')
        
        @include('layouts.front.footer')
	</body>    
</html>