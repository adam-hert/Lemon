<html>
    <body style="background-image:url('../public/photo.jpg')">
    	<div style="position:fixed;top:10px;height:40px;right:12px;text-align:center;line-height:40px;color:#fff">
    		<a href="updateproducts" style="margin-right:10px;text-decoration:none;border-radius:3px;float:right;height:100%;width:150px;border:solid 1px #999;color:inherit">Update Local DB</a>
    		<a href="products" style="margin-right:10px;text-decoration:none;border-radius:3px;float:right;height:100%;width:150px;border:solid 1px #999;color:inherit">Show Products</a>
    		<a href="graph" style="margin-right:10px;text-decoration:none;border-radius:3px;float:right;height:100%;width:150px;border:solid 1px #999;color:inherit">Bar Graph</a>

    	</div>
    	@yield('header')
    	<div style='left:10%;width:80%;height:80%;position:fixed;top:10%;border:solid 1px #333;border-radius:3px;background:#eee'>
        @yield('content')
    </div>
    </body>
</html>